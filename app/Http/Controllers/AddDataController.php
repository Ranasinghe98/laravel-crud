<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AddDataController extends Controller
{
    function addData(Request $req){
        $user = new User;

        $user -> name = $req -> name;
        $user -> email = $req -> email;
        $user -> phone = $req -> phone;

        $user -> save();

        return redirect('/');
    }
}
