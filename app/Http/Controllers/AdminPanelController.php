<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    public function generate_ru(){
        return view('cabinet.adminpanel_ru');
    }
    public function generate_en(){
        return view('cabinet.adminpanel_en');
    }
    public function add_new_contact(Request $request){
        $database_row=0;
        DB::insert('insert into socials (`id`, `created_at`, `updated_at`, `type`, `city_or_url`, `content`, `url`) values (?, ?, ?, ?, ?, ?, ?)', $database_row);
        
    }
}
