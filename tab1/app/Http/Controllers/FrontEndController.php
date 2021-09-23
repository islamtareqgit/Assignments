<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function homePageShow(){
        return view('home');
    }

    public function aboutPageShow(){
        return view('about');
    }

    public function contactPageShow(){
        return view('contact');
    }
}
