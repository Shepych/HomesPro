<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LangController extends Controller
{
    public function change(Request $request){
        if($request['lang']=="ru"){
            return redirect(route('site_ru.index'));
        }
        if($request['lang']=="en"){
            return redirect(route('site_en.index'));
        }
    }
}
