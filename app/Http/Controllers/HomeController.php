<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function dashboard(){
        $posts = Post::where('user_id','=',auth()->user()->id)->get();
        return view('dashboard',compact('posts'));
    }
    public function register(){
        return view('register');
    }
    public function login(){
        return view('login');
    }
}
