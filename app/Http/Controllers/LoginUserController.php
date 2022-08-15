<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginUserController extends Controller
{
    function login(Request $req){

        $userData = User::where('name', $req -> input('name')) -> get();

        // if($req->input('name') == $userData[0]->name){
            if($userData[0]->password == $req->input('password')){
                $req -> session() -> put('name', $userData[0]->name);
                return redirect('welcome');           
            }
            return redirect('/');
        // }
        // return redirect('/');
    }
}
