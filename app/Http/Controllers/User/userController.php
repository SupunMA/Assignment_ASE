<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class userController extends Controller
{
    function homeUser(){
        return view('User.home');
    }
}
