<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login_form()
    {
        return view('admin.user.login');
    }

    public function login(Request $request)
    {
        $validateLogin = $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required',
        ]);
        if (Auth::attempt($validateLogin)) {
            if (Auth::user()->role == 1) {
                return redirect()->route('admin.post.index');
            }
            return redirect()->route('client.index');
        }
        return redirect()->route('user.login_form')->with('message', 'Login failed');
    }

    public function register()
    {
        return view('admin.user.register');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);
        $formFields['password'] = bcrypt($formFields['password']);
        User::create($formFields);
        return redirect()->route('user.login_form');
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('client.index');
    }
}
