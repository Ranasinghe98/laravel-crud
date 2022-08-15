<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FetchData;
use App\Http\Controllers\AddDataController;
use App\Http\Controllers\DeleteUserController;
use App\Http\Controllers\LoginUserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::view('/', 'login');


Route::post('/login', [LoginUserController::class, 'login']);

Route::view('welcome', 'welcome');

Route::get('/users', [FetchData::class, 'getData']);

Route::view('/add', 'insert');
Route::post('/add', [AddDataController::class, 'addData']);

Route::get('/userslist', [DeleteUserController::class, 'list']);

Route::get('delete/{id}', [DeleteUserController::class, 'delete']);

Route::get('edit/{id}', [DeleteUserController::class, 'showData']);

Route::post('edit', [DeleteUserController::class, 'update']);


Route::get('login', function(){
    if(session() -> has('name')){
        return redirect('welcome');
    }
    return view('login');
});


Route::get('logout', function(){
    if(session() -> has('name')){
        session() -> pull('name');
    }
    return view('login');
});

// Route::get('/user/{name}', function($name){
//     return view('users', [ 'name' => $name ]);
// });

// Route::get('user/{name}', [usersController::class, 'loadView']); 