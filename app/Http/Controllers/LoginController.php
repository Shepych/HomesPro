<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        if(Auth::check()){
            return redirect()->intended(route('user.cabinet_profile'));
        }
        $formdata = $request->only(['email','password']);
        if(Auth::attempt($formdata)){
            return redirect()->intended(route('user.cabinet_profile'));
        }
        return redirect(route('site_ru.about'));
    }
    public function logout(Request $request){
        if(Auth::check()){
            Auth::logout();
        }
        return redirect(route('site_ru.about'));
    }
    public function defend(){
        return redirect()->intended(route('site_ru.about'));
    }
}