<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignupController extends Controller
{
    //
    public function form()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        // validate request data
        $this->validate($request, [
            'nama' => 'required|string|max:50',
            'password' => 'required|min:6',
            'email' => 'required|string|max:100|unique:users,email',
            'alamat' => 'required|string|max:600',
            'status' => 'required|string|max:25'
        ]);

        // save into table
        $user = User::created([
            'nama' => $request->nama,
            'password' => $request->password,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'status' => $request->status
        ]);

        // autologin
        Auth::loginUsingId($user->id);

        // redirect to home
        return redirect('/home');
    }
}
