<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function generate_ru(Request $request){
        return view('site_ru.services');
    }
    public function generate_en(Request $request){
        return view('site_en.services');
    }
}
