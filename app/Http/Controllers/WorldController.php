<?php

namespace App\Http\Controllers;


use App\StationeersXML\MapConverter;
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

        $xml = file_get_contents(storage_path('app/world_small.xml'));
//        $xml = file_get_contents(storage_path('app/world.xml'));

        $map_converter = new MapConverter($xml);

        $things = $map_converter->get_things();

        return JsonResponse::create([]);
    }
}
