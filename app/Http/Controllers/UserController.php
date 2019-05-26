<?php

namespace App\Http\Controllers;


class UserController extends Controller
{
    public function landing()
    {
        return redirect('login');
    }
}
