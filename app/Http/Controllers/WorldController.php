<?php

namespace App\Http\Controllers;


use App\StationeersXML\Thing;
use DOMElement;
use FluidXml\FluidXml;
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

        $doc = new FluidXml($xml);

        $thing_elements = $doc->query('/WorldData/Things/ThingSaveData')->array();

        $things_keyed = [];

        /**
         * @var $thing DOMElement
         */
        foreach ($thing_elements as $thing_element)
        {
            $thing = new Thing($thing_element);

            $things_keyed[$thing->get_reference_id()] = $thing;
        }

        $broken_references = [];

        foreach ($things_keyed as $thing)
        {
            if (!is_null($thing->get_parent_reference_id()))
            {
                if (!isset($things_keyed[$thing->get_parent_reference_id()]))
                {
                    $broken_references[] = [
                        'reference_id' => $thing->get_reference_id(),
                        'parent_reference_id' => $thing->get_parent_reference_id(),
                    ];
                }
            }
        }

        return JsonResponse::create([
            'things' => [
                'broken_references' => $broken_references,
            ]
        ]);
    }
}
