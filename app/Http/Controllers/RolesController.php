<?php

namespace App\Http\Controllers;
use App\Models\Roles;

use Illuminate\Http\Request;

class RolesController extends Controller
{
    //
    public function index()
    {
        return $roles = Roles::get();
        return view('mazad_admin.roles.rolesShow', [
            'roles' => $roles,
        ]);
    }
}
