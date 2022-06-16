<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function generate_ru(Request $request){
        return view('site_ru.index');
    }
    public function generate_en(Request $request){
        return view('site_en.index');
    }
}
