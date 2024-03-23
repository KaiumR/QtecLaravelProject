<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notes;
use App\Models\Qtecproject;

class IndexController extends Controller
{
    public function index(){
        if(session()->has('user_name')){
            return view('indx');
        }
        return redirect('login');
    }
    public  function save(Request $request){
        // echo("<pre>");
        // print_r($request);
        // echo("<pre>");
        //print_r(session('user_name'));
        

        if(session()->has('user_name')){
            //echo "Hello\n";

            $new_node = new Notes;
            $new_node->user_name = session('user_name');
            $new_node->title = $request['title'];
            $new_node->content = $request['content'];
            $new_node->save();

            return redirect('home');
        }
        return redirect('login');
    }

    public  function notes(){
        
        if(session()->has('user_name')){
            $id = Notes::all();
            $data = compact('id');
            return view('notes')->with($data);
        }
        return redirect('login');
    }
}
