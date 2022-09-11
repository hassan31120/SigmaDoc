<?php

namespace App\Http\Controllers;

use App\Models\Request as ModelsRequest;
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

    public function store(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'mobile' => 'required|numeric'
        ]);
        $data = $request->all();
        ModelsRequest::create($data);
        return redirect(route('home'))->with('success', 'تم تسجيل بياناتك بنجاح');
    }

}
