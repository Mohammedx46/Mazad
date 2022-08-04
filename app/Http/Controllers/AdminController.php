<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function admin()
    {
        return view('mazad_admin.index');
    }

    public function userCreate()
    {
        return view('mazad_admin.screens.users.add_user');
    }

    


}
