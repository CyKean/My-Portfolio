<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function about(){
        return view('hello');
    }
    public function resume(){
        return view('resume');
    }
    public function works(){
        return view('works');
    }
    public function contact(){
        return view('contact');
    }
}