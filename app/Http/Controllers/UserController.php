<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = $request->session()->get('users');
        dd($users);
        // return view('dashboard/home',['users'=>$users]);
    }
}
