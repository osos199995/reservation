<?php

namespace App\Http\Controllers\Users\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $admin=Admin::find(1);
//        $role = Role::create(['name' => 'admin']);
//        $permission = Permission::create(['name' => 'create resturants']);
//        $permission->assignRole($role);
//        $role->givePermissionTo($permission);

//        $admin->assignRole('admin');

        return view('admin');
    }
}
