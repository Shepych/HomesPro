<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AboutController extends Controller
{
    public function generate_ru(Request $request){
//        $user = new User();
//        $user->name = 'admin';
//        $user->surname = 'admin';
//        $user->patronymic = 'admin';
//        $user->address = '["Москва", "Онежская"]';
//        $user->password = Hash::make('adminPanel');
//        $user->login = 'admin';
//        $user->status = 'admin';
//        $user->email = 'admin@mail.ru';
//        $user->save();

        return view('site_ru.about');
    }
    public function generate_en(Request $request){
        return view('site_en.about');
    }
}
