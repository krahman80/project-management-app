<?php

namespace App\Http\Controllers\Admin;

use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UsersController extends Controller
{
    public function __construct() {
        $this->middleware(['role:admin']);
    }
    public function index(){
        $users = User::with('roles')->orderBy('name', 'asc')->get();
        // $users = User::get();
        // dd($users->getRoleNames());
        return view('admins.users.index', ['users' => $users]);
    }
    
    public function assignUser($id) {
        // $users = User::orderBy('name', 'asc')->get();
        $user = User::findOrFail($id);
        $roles = Role::orderBy('name', 'asc')->get();
        return view('admins.users.assign', ['user' => $user, 'roles' => $roles]);    
    }

    public function storeAssignUser(Request $request) {
        // dd($request);
        $user = User::findOrFail($request->input('user'));
        if($user->getRoleNames()->count()){
            return redirect()->route('admin.users.index')->with('err', 'error user owned a role');
        }
        $user->assignRole($request->input('role'));

        return redirect()->route('admin.users.index')->with('status', 'add role success');
    }
}
