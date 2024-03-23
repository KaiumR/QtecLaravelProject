<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notes;
use DateTime;

class NotesController extends Controller
{
    public function delete($id){
        Notes::find($id)->delete();
        return redirect()->back();
    }
    public function edit($id){
        $note=Notes::find($id);

        if(is_null($note)){
            if(session()->has('user_name')){
                return redirect('notes');
            }
            return redirect('login');   
        }else{
            $data = compact('note');
            return view('update')->with($data);
        }
    }
    public function update($id, Request $request){
        $note=Notes::find($id);
        $date=new DateTime();

        $note->title = $request['title'];
        $note->content = $request['content'];
        $note->modified_at=$date;
        $note->save();

        if(session()->has('user_name')){
            return redirect('notes');
        }
        return redirect('login'); 
    }
    public function search(Request $request){
        //echo "HELLO\n";
        //$notes = Notes::where('title','=', $request['title'])->get();
        //print_r($notes);

        if(session()->has('user_name')){
            $id = Notes::all();
            $title=$request['find'];
            $data = compact('id','title');
            return view('search')->with($data);
        }
        return redirect('login');
    }
}
