<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class adminController extends Controller
{
    function homeAdmin(){
        return view('Admin.home');
    }
}
