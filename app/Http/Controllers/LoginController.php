<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Qtecproject;

class LoginController extends Controller
{
    public function index(){
        if(session()->has('user_name')){
            return redirect('/home');
        }
        return view('login');
    }
    public function homePage(Request $data)
    {
        // echo $data['passcode']." ".$data['user_name']."\n";
        // echo $data['passcode'];
        // print_r($data['user_name']);

        $id = Qtecproject::find($data['user_name']);


        if( !is_null($id) && $id['passcode']===md5($data['passcode'])){
            //set session
            $user=$data->input('user_name');
            $data->session()->put("user_name",$user);

            //if($id['passcode']==md5($data['passcode']))
               //echo "BOOM! Authentication worked\n";
            return redirect('/home');
        }else{
            //echo "Invalid id or password!\n";
            return redirect('/login');
        }
    }
}
