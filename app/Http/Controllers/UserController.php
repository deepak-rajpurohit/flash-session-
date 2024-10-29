<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UserController extends Controller
{
    function index(Request $request){

        return view('user')->with('message','User has been added successfully.');
    }
    function addUser(Request $request){
        $request->session()->flash('message','User has been added successfully.');

            return redirect('user');

       return view('user')->with('message','User has been added successfully.'); // "New User Added";
    }
}
