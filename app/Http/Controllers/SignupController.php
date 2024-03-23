<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Qtecproject;

class SignupController extends Controller
{
    public function index(){
        if(session()->has('user_name')){
            return redirect('/home');
        }
        return view('signup');

    }

    public function store(Request $request){

        echo "<pre>";
        print_r($request->all());

        $new_node = new Qtecproject;
        $new_node->user_name = $request['user_name'];
        $new_node->mobile = $request['mobile'];
        $new_node->address = $request['address'];
        $new_node->passcode = md5($request['passcode']);
        $new_node->save();

        return redirect('login');
    }
}
