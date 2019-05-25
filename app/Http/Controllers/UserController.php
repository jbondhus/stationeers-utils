<?php

namespace App\Http\Controllers;


use App\StationeersXML\MapConverter;
use App\StationeersXML\Thing;
use Illuminate\Http\JsonResponse;
use Request;

class UserController extends Controller
{
    public function landing()
    {
        return view('landing', [
            'page_name' => 'Please Login',
        ]);
    }
}
