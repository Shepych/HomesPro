<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectsShopController extends Controller
{
    public function generate_ru(Request $request){
        return view('site_ru.projects_shop');
    }
    public function generate_en(Request $request){
        return view('site_en.projects_shop');
    }

}
