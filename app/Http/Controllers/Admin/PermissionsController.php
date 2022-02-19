<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Http\Requests\CreatePermissionRequest;
use App\Http\Requests\UpdatePermissionRequest;

class PermissionsController extends Controller
{
    public function __construct() {
        $this->middleware('role:admin');
    }

    public function index(){
        $permissions = Permission::orderBy('name', 'asc')->get();
        return view('admins.permissions.index',['permissions' => $permissions]);
    }

    public function create() {
        return view('admins.permissions.create');
    }

    public function store(CreatePermissionRequest $request) {
        Permission::create(['name' => $request->input('name')]);
        return redirect()->route('admin.permissions.index')->with('status', 'permission added');
    }

    public function edit($id) {
        $permission = Permission::findOrFail($id);
        return view('admins.permissions.edit', ['permission' => $permission]);
    }

    public function update(UpdatePermissionRequest $request, $id) {
        $permission = Permission::findOrFail($id);
        $permission->name = $request->input('name');
        $permission->save();

        return redirect()->route('admin.permissions.index')->with('status', 'permission updated');
    }

    public function destroy($id) {
        $permission = Permission::find($id)->delete();
        return redirect()->route('admin.permissions.index')->with('status', 'permission deleted successfully');
    }
}
