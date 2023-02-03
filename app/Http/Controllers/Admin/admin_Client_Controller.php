<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class admin_Client_Controller extends Controller
{
    function addClient(){
        return view('Profiles.Admin.Clients.addClients');
    }
}
