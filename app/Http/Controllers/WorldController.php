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
                    'type' => 'broken_parent_reference',
                    'parent_reference_id' => $thing->get_parent_reference_id(),
                ];
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
