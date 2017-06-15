<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use App\Company;

class AuthController extends Controller
{
    public function index(){
        return view('login');
    }
    public function authenticate(Request $request){
        if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']])){
            $user = Auth::user();
            $companies = Company::where('user_id', $user->id)
            ->get();
            return view('dashboard.homepage.home', compact('companies','user'));
        }else{
            return redirect('login');
        }
    }

    // Registration
    public function newUser(){
        return view('register');
    }
    public function register(){
        // Save User Registration
        $user = new User;
        $user->name = Input::get('name');
        $user->email = Input::get('email');
        $user->password = Hash::make(Input::get('password'));
        $user->save();

        return view('login');
    } 
}
