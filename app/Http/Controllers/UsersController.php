<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;

use App\Http\Requests;
use App\User;
use App\Country;
use App\User_Role;
use App\Role;
use App\Permission;

class UsersController extends Controller
{
    public function newUser(){
        $Countries = Country::all();
        return view('dashboard.users.new', compact('Countries'));
    }

    public function create(){
        // Save User Registration
        $user = new User;
        $user->name = Input::get('name');
        $user->email = Input::get('email');
        $user->password = Hash::make(Input::get('password'));
        $user->save();

        // Save Default Roles and Permissions
        $user_role = new User_Role;
        // $user_role->
    }
}
