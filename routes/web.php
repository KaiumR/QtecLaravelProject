<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\NotesController;
use Illuminate\Support\Facades\Route;
use App\Models\Qtecproject;
use App\Models\Notes;

Route::get('/',[WelcomeController::class, 'index']);
Route::get('/login',[LoginController::class, 'index']);
Route::get('/signup',[SignupController::class, 'index']);
Route::get('/home',[IndexController::class, 'index']);
Route::get('/notes',[IndexController::class, 'notes']);
Route::get('/delete/{id}',[NotesController::class, 'delete']);
Route::get('/edit/{id}',[NotesController::class, 'edit']);
Route::post('/signup',[SignupController::class, 'store']);
Route::post('/verification',[LoginController::class, 'homePage']);
Route::post('/save',[IndexController::class, 'save']);
Route::post('/update/{id}',[NotesController::class, 'update']);
Route::post('/search',[NotesController::class, 'search']);

Route::get('/logout',function(){
    if(session()->has('user_name')){
        session()->pull('user_name',null);
        return redirect('/');
    }
});