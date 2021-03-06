<?php

namespace App\Http\Controllers;


use App\StationeersXML\AtmosphereSaveData;
use App\StationeersXML\MapConverter;
use App\StationeersXML\MapStats;
use App\StationeersXML\Thing;
use App\StationeersXML\ThingSaveData;
use Illuminate\Http\JsonResponse;
use Request;

class AjaxWorldController extends Controller
{
    public function check_xml()
    {
        $file = Request::file('file');
        $xml = file_get_contents($file->getRealPath());

        $map_converter = new MapConverter($xml);

        $things = $map_converter->get_things();
        $atmospheres = $map_converter->get_atmospheres();

        $atmosphere_thing_reference_ids = [];
        $atmosphere_network_reference_ids = [];

        $atmosphere_duplicate_thing_ids = [];

        /**
         * @var $atmosphere AtmosphereSaveData
         */
        foreach ($atmospheres as $atmosphere)
        {
            if ($atmosphere->get_thing_reference_id() != 0)
            {
                if (!isset($atmosphere_thing_reference_ids[$atmosphere->get_thing_reference_id()]))
                {
                    $atmosphere_thing_reference_ids[$atmosphere->get_thing_reference_id()] = true;
                }
                else
                {
                    $atmosphere_duplicate_thing_ids[] = $atmosphere->get_thing_reference_id();
                }
            }

            if ($atmosphere->get_network_reference_id() != 0)
            {
                if (!isset($atmosphere_network_reference_ids[$atmosphere->get_network_reference_id()]))
                {
                    $atmosphere_network_reference_ids[$atmosphere->get_network_reference_id()] = true;
                }
            }
        }

        $pipe_networks = $map_converter->get_pipe_networks();
        $pipe_networks_keyed = [];

        foreach ($pipe_networks as $pipe_network)
        {
            $pipe_networks_keyed[$pipe_network] = true;
        }

        $cable_networks = $map_converter->get_cable_networks();
        $cable_networks_keyed = [];

        foreach ($cable_networks as $cable_network)
        {
            $cable_networks_keyed[$cable_network] = true;
        }

        $thing_problems = [];

        $found_cable_networks = [];
        $found_pipe_networks = [];

        /**
         * @var ThingSaveData $thing
         */
        foreach ($things as $thing)
        {
            $problems = [];

            if (
                $thing->get_parent_reference_id() != 0 &&
                !is_null($thing->get_parent_reference_id()) &&
                !isset($things[$thing->get_parent_reference_id()]))
            {
                $problems[] = [
                    'type' => 'broken_reference',
                    'parent_reference_id' => $thing->get_parent_reference_id(),
                ];
            }

            if (
                $thing instanceof Thing\StructureSaveData &&
                starts_with($thing->get_prefab_name(), 'StructureCable') &&
                ends_with($thing->get_prefab_name(), 'Burnt')
            )
            {
                $problems[] = [
                    'type' => 'burnt_cable'
                ];
            }

            if ($thing instanceof Thing\CableSaveSaveData)
            {
                $found_cable_networks[] = [
                    'reference_id' => $thing->get_reference_id(),
                    'cable_network_id' => $thing->get_cable_network_id(),
                ];

                if (!isset($cable_networks_keyed[$thing->get_cable_network_id()]))
                {
                    $problems[] = [
                        'type' => 'broken_reference',
                        'cable_network_id' => $thing->get_cable_network_id(),
                    ];
                }
            }

            if ($thing instanceof Thing\PipeSaveData)
            {
                $found_pipe_networks[] = [
                    'reference_id' => $thing->get_reference_id(),
                    'pipe_network_id' => $thing->get_pipe_network_id(),
                ];

                if (!isset($pipe_networks_keyed[$thing->get_pipe_network_id()]))
                {
                    $problems[] = [
                        'type' => 'broken_reference',
                        'pipe_network_id' => $thing->get_pipe_network_id(),
                    ];
                }

                if ($thing->get_is_burst())
                {
                    $problems[] = [
                        'type' => 'burst_pipe',
                        'pipe_network_id' => $thing->get_pipe_network_id(),
                    ];
                }
            }

            if (count($problems) > 0)
            {
                $thing_problems[] = [
                    'reference_id' => $thing->get_reference_id(),
                    'problems' => $problems,
                ];
            }
        }

        $found_cable_networks = collect($found_cable_networks)->groupBy('cable_network_id')->toArray();
        $found_pipe_networks = collect($found_pipe_networks)->groupBy('pipe_network_id')->toArray();

        $cable_network_problems = [];

        foreach ($cable_networks as $cable_network)
        {
            if (!isset($found_cable_networks[$cable_network]))
            {
                $cable_network_problems[] = [
                    'type' => 'orphaned_network',
                    'subtype' => 'orphaned_cable_network',
                    'cable_network_id' => $cable_network,
                ];
            }
        }

        $pipe_network_problems = [];

        foreach ($pipe_networks as $pipe_network)
        {
            if (!isset($found_pipe_networks[$pipe_network]))
            {
                $pipe_network_problems[] = [
                    'type' => 'orphaned_network',
                    'subtype' => 'orphaned_pipe_network',
                    'pipe_network_id' => $pipe_network,
                ];
            }
        }

        $atmosphere_problems = [];

        foreach (array_keys($atmosphere_thing_reference_ids) as $atmosphere_thing_reference_id)
        {
            if (!isset($things[$atmosphere_thing_reference_id]))
            {
                $atmosphere_problems[] = [
                    'type' => 'broken_reference',
                    'thing_reference_id' => $atmosphere_thing_reference_id,
                ];
            }
        }

        foreach (array_keys($atmosphere_network_reference_ids) as $atmosphere_network_reference_id)
        {
            if (!isset($pipe_networks_keyed[$atmosphere_network_reference_id]))
            {
                $atmosphere_problems[] = [
                    'type' => 'broken_reference',
                    'network_reference_id' => $atmosphere_network_reference_id,
                ];
            }
        }

        return JsonResponse::create([
            'thing_problems' => $thing_problems,
            'cable_network_problems' => $cable_network_problems,
            'pipe_network_problems' => $pipe_network_problems,
            'atmosphere_problems' => $atmosphere_problems,
            'atmosphere_duplicate_thing_ids' => $atmosphere_duplicate_thing_ids,
            'peak_memory_usage' => memory_get_peak_usage(true),
        ]);
    }

    public function stats()
    {
        $file = Request::file('file');
        $xml = file_get_contents($file->getRealPath());

        $map_stats = new MapStats($xml);

        $thing_counts = $map_stats->get_thing_counts();
        $atmospherics_mols = $map_stats->get_atmospherics_mols();

        return JsonResponse::create([
            'thing_counts' => $thing_counts,
            'atmospherics_mols' => $atmospherics_mols,
        ]);
    }
}
