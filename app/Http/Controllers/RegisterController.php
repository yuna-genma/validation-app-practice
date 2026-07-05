<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function create()
    {
        return view('register');
    }
    public function store(RegisterRequest $request)
    {
        $validated = $request->validated();

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        return redirect()->route('register.show');
    }

    public function show()
    {
        return view('register_success');
    }
}
