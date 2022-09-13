<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\Request as ModelsRequest;
use Illuminate\Http\Request;

class DocController extends Controller
{
    public function index(){

        $partners = Partner::latest()->take(3)->get();
        return view('home.home', compact('partners'));

    }

    public function prtners(){
        $partners = Partner::all();
        return view('home.partners', compact('partners'));
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
