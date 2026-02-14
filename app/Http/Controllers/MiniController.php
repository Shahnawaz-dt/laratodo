<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiniController extends Controller
{
    function About(){
        return view ('About');
    }

    function Contact(){
        return view ('Contact');
    }
}
