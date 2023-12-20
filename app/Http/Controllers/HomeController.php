<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkout;
use Auth;

class HomeController Extends Controller
{
    public function dashboard()
    {
        $checkouts = Checkout::with('camp')->where('user_id',Auth::id())->get();
        return view('user.dashboard',[
            "checkout" => $checkouts
        ]);
    }
}