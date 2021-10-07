<?php

namespace App\Http\Controllers;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //Role::create(['name'=>'writer']);(1)
        //$permission = Permission::create(['name'=>'edit write post']);(2)
        //$role = Role::findById(1); //(3)
        //$permission = Permission::findById(2);(6)
        //$permission = Permission::findByid(1); //(4)
        //$role->givePermissionTo($permission); //(5)
        //$permission->removeRole($role);(3-6-7)
        //$role->revokePermissionTo($permission); (3-4-8)
        //auth()->user()->givePermissionTo('edit post'); (1 - permissions)
        //auth()->user()->assignRole('admin'); //(2 - assign role)
        //return auth()->user()->permissions;
        //return auth()->user()->getDirectPermissions();
        //return auth()->user()->getAllPermissions();
        //return User::role('writer')->get();
        //return auth()->user()->revokePermissionTo('edit post');
        //return auth()->user()->removeRole('writer');
        // $role = Role::findById(4); //(3)
        // $permission = Permission::findByid(3); //(4)
        // $role->givePermissionTo($permission); //(5)
        return view('home');
    }
}
