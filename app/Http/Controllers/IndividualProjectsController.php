<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndividualProjectsController extends Controller
{
    public function generate_ru(){
        return view('site_ru/individual_projects');
    }
    public function generate_en(){
        return view('site_en/individual_projects');
    }
}
