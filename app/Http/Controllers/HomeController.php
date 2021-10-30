<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index()
    {
        // $user=auth()->user();
        // Mail::to($user)->send(new PostLiked()); 

        // dd(auth()->user()->posts);
        return view('home');
    }
}
