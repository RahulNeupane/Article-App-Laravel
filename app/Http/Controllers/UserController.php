<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function registerUser(Request $request){
        $request->validate([
            'name'=>'required|string|max:30',
            'email'=>'required|email|unique:users,email|max:30',
            'password'=>'required|min:8',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>Hash::make( $request->password),
        ]);

        return redirect('/login');
    }

    public function loginUser(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);

        dd($request);

    }
}
