<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FetchData;
use App\Http\Controllers\AddDataController;
use App\Http\Controllers\DeleteUserController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/insert', function(){
//     return view('insert');
// });

Route::get('contact', function(){
    return view('contact');
});

Route::get('/services', function(){
    return view('services');
});

Route::get('/users', [FetchData::class, 'getData']);

Route::view('/add', 'insert');
Route::post('/add', [AddDataController::class, 'addData']);

Route::get('/userslist', [DeleteUserController::class, 'list']);

Route::get('delete/{id}', [DeleteUserController::class, 'delete']);

Route::get('edit/{id}', [DeleteUserController::class, 'showData']);

Route::post('edit', [DeleteUserController::class, 'update']);
// Route::get('/user/{name}', function($name){
//     return view('users', [ 'name' => $name ]);
// });

// Route::get('user/{name}', [usersController::class, 'loadView']); 