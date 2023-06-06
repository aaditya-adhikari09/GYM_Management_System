<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function user_index()
    {
        return view('welcome');
    }


    public function shop()
    {
        return view('User.shop');
    }
}