<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('index','index');

//Route for submitting form
Route::post('add',[UserController::class,'addUser'])->name('addUser');

//display data from DB
Route::get('display',[UserController::class,'display'])->name('display');

//DELETE data from DB
Route::get('delete/{id}',[UserController::class,'delete']);


Route::get('update/{id}',[UserController::class,'update']);

Route::put('updatevehicle/{id}',[UserController::class,'updatevehicle']);

//search route
Route::get('search',[UserController::class,'search'])->name('searchUser');


//route for login Page
Route::view('login','login');

// Route::view('display','display')->name('display');

Route::post('/loginMatch',[UserController::class,'login']);

Route::get('dashboard',[UserController::class,'displayPage'])->name('dashboard');

