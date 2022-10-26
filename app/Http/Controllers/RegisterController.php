<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;  
use Illuminate\Validation\Rules;

class RegisterController extends Controller
{


    public function create() {
        return view('auth/register');
    }
    public function store() {

        $this->validate(request(), [
            'name' => 'required',
            'email' =>'required|email',
            'password' => ['required', 'confirmed', Rules\Password::min(6)->letters()->symbols()->numbers()->mixedCase()]

        ]);

        $user = User::create(request(['name', 'email', 'password']));

        auth()->login($user);
        return redirect()->to('/');

    }
}
