<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function __contruct(){
    $this->middleware('auth');
    }

    public function index(){
        $user = Auth::user();
        $home = 'home';
        
    if($user->hasRole('admin')){
        $home = 'admin.home';
    }

    else if($user->hasRole('user')){
        $home = 'user.home';
    }

    return view($home);
    // return redirect()->route($home);
    }
}
