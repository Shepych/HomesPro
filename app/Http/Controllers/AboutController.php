<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AboutController extends Controller
{
    public function generate_ru(Request $request){
        return view('site_ru.about');
    }
    public function generate_en(Request $request){
        return view('site_en.about');
    }
}
