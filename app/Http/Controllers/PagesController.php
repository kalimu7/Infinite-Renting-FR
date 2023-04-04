<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('home');
    }
    public function profile(){
        return view('profile');
    }
    public function dash(){
        return view('dashboard1');
    }
}
