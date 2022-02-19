<?php

namespace App\Http\Controllers\Admin;

use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Http\Requests\CreateRoleRequest;
use App\Http\Requests\UpdateRoleRequest;

class RolesController extends Controller
{
    public function __construct(){
        $this->middleware('role:admin');
    }
    
    public function index() {
        $roles = Role::get();
        return view('admins.roles.index', ['roles' => $roles]);
    }

    public function create() {
        $permissions = Permission::get();
        return view('admins.roles.create', ['permissions' => $permissions]);
    }

    public function store(CreateRoleRequest $request) {
        $role = Role::create(['name' => $request->input('name')]);
        $role->permissions()->sync($request->input('permission'));
        return redirect()->route('admin.roles.index')->with('status', 'role added');
    }

    public function edit($id) {
        $role = Role::findOrFail($id);
        $permission = Permission::get();
        $rolepermission = DB::table('role_has_permissions')
            ->where('role_has_permissions.role_id', $id)
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();
        
        return view('admins.roles.edit', ['role' => $role, 'permission' => $permission, 'rolepermission' => $rolepermission]);
    }

    public function update(UpdateRoleRequest $request, $id) {
        
        $role = Role::findOrFail($id);
        
        $role->name = $request->input('name');
        $role->save();

        $role->permissions()->sync($request->input('permission'));
        return redirect()->route('admin.roles.index')->with('status', 'role updated');
    }

}
