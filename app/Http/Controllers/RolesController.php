<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleRequest;
use App\Models\Roles;

use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class RolesController extends Controller
{
    //
    public function index()
    {
        $roles = Roles::paginate(10);
        $count = Roles::all()->count();
        return view('mazad_admin.roles.rolesShow', [
            'roles' => $roles,
            'allRolesCount' => $count,
        ]);
    }

    public function create()
    {
        $roles = Roles::latest()->paginate(10);
        $count = Roles::all()->count();
        return view('mazad_admin.roles.add_role', [
            'roles' => $roles,
            'allRolesCount' => $count,
        ]);
    }

    public function store(RoleRequest $request)
    {
        try{
            $role = $this->process(new Roles , $request);
            if ($role)
                return redirect('/roles')->with('success' , 'تم إضافة الصلاحية بنجاح');
            else    
                return redirect('/roles')->with('danger' , 'لم يتم إضافة الصلاحية');
        }catch(\Exception $ex)
        {
            return $ex;
        }
    }

    public function edit($id)
    {
        $role = Roles::findOrFail($id);
        return view('mazad_admin.roles.edit_role', [
            'role' => $role,
        ]);
    }

    public function update($id , RoleRequest $request)
    {
        try{
            $role = Roles::findOrFail($id);
            $role = $this->process($role , $request);
            if ($role)
                return redirect('/roles')->with('success' , 'تم تعديل الصلاحية بنجاح');
            else    
                return redirect('/roles')->with('danger' , 'لم يتم تعديل الصلاحية');
        }catch(\Exception $ex)
        {
            return $ex;
        }
    }


    protected function process (Roles $role, Request $r)
    {
        $role->role_name = $r->role_name ;
        $role->permissions = json_encode($r->permissions);
        $role->save();

        return $role;
    }
}
