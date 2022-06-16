<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
class OrderController extends Controller
{
    public function create(Request $request){
        Order::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'telephone_number' => $request['telephone_number'],
            'comment' => $request['comment'],
            'status' => 'hot'
        ]);
        return redirect(route('about'));
    }
}
