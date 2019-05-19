<?php

namespace App\Http\Controllers;


use App\StationeersXML\MapConverter;
use App\StationeersXML\Thing;
use Illuminate\Http\JsonResponse;
use Request;

class WorldController extends Controller
{
    public function check_xml()
    {
        if (Request::get('token') !== 'WhZbM3dU4tQnWrHn')
        {
            return response(['error_message' => 'Access denied'], 401);
        }

//        $xml = file_get_contents(storage_path('app/world_small.xml'));
        $xml = file_get_contents(storage_path('app/world.xml'));

        $map_converter = new MapConverter($xml);

        $things = $map_converter->get_things();

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

        /**
         * @var Thing $thing
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
                    'subtype' => 'parent_reference_id',
                    'parent_reference_id' => $thing->get_parent_reference_id(),
                ];
            }

            if ($thing instanceof Thing\Cable)
            {
                if (!isset($cable_networks_keyed[$thing->get_cable_network_id()]))
                {
                    $problems[] = [
                        'type' => 'broken_reference',
                        'subtype' => 'cable_network_id',
                        'cable_network_id' => $thing->get_cable_network_id(),
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

        return JsonResponse::create([
            'thing_problems' => $thing_problems,
        ]);
    }
}
