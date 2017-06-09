<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;

class AuthController extends Controller
{
    public function index(){
        return view('login');
    }
    public function authenticate(Request $request){
        if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']])){
            return redirect('dashboard');
        }
    }
}
