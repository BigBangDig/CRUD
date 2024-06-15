<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class usercontroller extends Controller
{
    function index(){
      return view('sesi/welcome');
    }
    function admin(){
       return view('ecommers');
    }
    function user(){
        return view('sesi/welcome');
        
    }
}

