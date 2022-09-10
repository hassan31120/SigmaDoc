<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocController extends Controller
{
    public function index(){
        return view('home.home');
    }

    public function prtners(){
        return view('home.partners');
    }

    public function us(){
        return view('home.about_us');
    }

    public function form(){
        return view('home.form');
    }

}
