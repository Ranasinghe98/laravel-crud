<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class FetchData extends Controller
{
    function getData(){

        $data = User::all();
        return view('userlist', ['members' => $data]);
    }
}
