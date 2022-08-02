<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function aboutme()
    {
        return view('aboutme');
    }
    public function contact()
    {
        return view('contact');
    } 
    public function product()
    {
        return view('product');
    }  
}
