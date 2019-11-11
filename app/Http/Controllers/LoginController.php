<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function form()
    {
        return view('auth.login');
    }
    public function attemp(Request $request)
    {
        $this->validate($request, [
            'nama' => 'nama|exists:users,nama',
            'password' => 'required'
        ]);
        $attempts = [
            'nama' => $request->nama,
            'password' => $request->password,
            'status' => 'active'
        ];
        if(Auth::attempt($attempts, (bool)$request->remember)) {
            return redirect()->intended('/admin');
        }
        return redirect()->back();
    }
}
