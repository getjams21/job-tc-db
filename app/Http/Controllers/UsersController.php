<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;

use App\Http\Requests;
use App\User;
use App\Country;

class UsersController extends Controller
{
    public function index(){
        $Countries = Country::all();
        return view('dashboard.users.new', compact('Countries'));
    }

    public function create(){
        
    }
}
