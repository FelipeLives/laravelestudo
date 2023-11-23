<?php

use App\Http\Controllers\Test\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Test\ProductController;

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

    // $user = \App\Models\User::find(31);
    // $user = new \App\Models\User();

    // $user->name = 'Nanderson Castro Daniel editado';
    // $user->email = 'nandodaniel@gmail.com';
    // $user->password = bcrypt('12345');

    // $user->save();
    // return view('welcome');
    // $userData = [
    //     'name' => "Usuário novo 2 edited",
    // ];

   // $user = new \App\Models\User();
    // $user = \App\Models\User::find(33);
    // $user->update($userData);
    // return view('welcome');
    
   
    // $user = \App\Models\User::find(34);
    // $user->delete();
    
    //  $user = \App\Models\User::whereIn('id', [22]);
    //  $user->delete();

    return view('welcome');
});

Route::get('hello/{name}', function($name) {
    return view('hello', compact('name'));
});

// Route::get('/users', [UserController::class, 'index']);
// Route::get('/users/{id}', [UserController::class, 'show']);
// Route::get('/users', [UserController::class, 'save']);

Route::resource('/users', UserController::class);
Route::resource('/products', ProductController::class);
