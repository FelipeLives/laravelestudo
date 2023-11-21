<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    // $sql =  'SELECT * from users WHERE id = 4';
    // $users = \DB::select($sql);

    // $users = \DB::table('users')
    //          ->where('id', 4)
    //          ->select('id', 'name')
    //          ->get();
    
    
    // $users = \App\Models\User::where('id', 4)
    //                             ->select('id', 'name')
    //                             ->get();
    // dd($users);
    return view('welcome');

});

Route::get('hello/{name}', function($name) {
    return view('hello', compact('name',));
});