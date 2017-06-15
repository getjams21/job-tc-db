<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Company;
use Auth;
use App\User;

class HomeController extends Controller
{
    public function index(){
        $user = Auth::user();
        $companies = Company::where('user_id', $user->id)
        ->get();
        return view('dashboard.homepage.home', compact('companies','user'));
    }
}
