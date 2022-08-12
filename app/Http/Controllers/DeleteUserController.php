<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DeleteUserController extends Controller
{
    function list(){
        $data = User::all();
        return view('userslist', ['members' => $data]);
    }

    function delete($id){
        $data = User::find($id);
        $data->delete();
        return redirect('/userslist');
    }

    function showData($id){
        $data =  User::find($id);
        return view('edit', ['data'=>$data]);
    }

    function update(Request $req){
        $data = User::find($req->id);

        $data -> name = $req -> name;
        $data -> email = $req -> email;
        $data -> phone = $req -> phone;

        $data -> save();

        return redirect('/users');
    }
}
