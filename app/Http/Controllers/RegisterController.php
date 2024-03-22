<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            "title" => "Register",
            "active" => "register"
        ]);
    }

    // Validasi form yang dikirim users
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'max:255'],
            'username' => ['required', 'min:5', 'max:255', 'unique:users'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', 'min:3', 'max:255']
        ]);

        User::create($validatedData);

        // $request->session()->flash('success', 'Sign up Successfull. Go Sign In!!');

        return redirect('/login')->with('success', 'Sign up Successfull. Go Sign In!!');
    }
}
