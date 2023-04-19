<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        //dd("hola mundo"); // dump and die
        return view('home.index');
    }

    public function login(){
        return view('home.login');
    }
}
