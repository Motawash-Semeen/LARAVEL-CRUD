<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function Home(){
        return view('welcome');
    }

    function Project(){
        return view('project');
    }
    function Contact(){
        return view('contact');
    }
}
