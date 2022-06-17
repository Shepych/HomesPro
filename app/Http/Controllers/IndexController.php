<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function generate_ru(Request $request){
        $main_slider = DB::table('main_page_slider_ru')->get();
        return view('site_ru.index',[
            'main_slider' => $main_slider,
        ]);
    }

    public function generate_en(Request $request){
        return view('site_en.index');
    }
}
