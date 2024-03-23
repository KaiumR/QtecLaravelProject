<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        if(session()->has('user_name')){
            return redirect('/home');
        }
        return view('welcome');
    }
    public function demo(){
        echo "HELLO";
    }
}
