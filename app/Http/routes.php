<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Http\Requests\Request;

Route::get('/', function () {
    return view('tasks');
});

Route::post('/', function (Request $request) {
    //
});

Route::delete('/',function($id){
   //
});
