<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function generate_ru(Request $request){
        return view('site_ru.books');
    }
    public function generate_en(Request $request){
        return view('site_en.books');
    }
}
