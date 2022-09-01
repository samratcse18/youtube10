<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mypage;

class MyController extends Controller
{
    public function login_page(){

        return view('mypage.login2');
    }
    public function signup_page(){

        return view('mypage.signup');
    }
    public function store(Request $request)
    {
        $mypages = Mypage::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => $request->password
        ]);
        
        return redirect('/my_login');
    }
}
