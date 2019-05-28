<?php

namespace App\Http\Controllers;


class WorldController extends Controller
{
    public function check_xml()
    {
        return view('check', [

        ]);
    }

    public function stats()
    {
        return view('stats', [

        ]);
    }
}
