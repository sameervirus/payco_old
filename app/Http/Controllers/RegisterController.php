<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use NextApps\VerificationCode\VerificationCode;

class RegisterController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'country_id' => ['required', 'string', 'max:255'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'country_id' => $request->country_id,
        ]);

        VerificationCode::send($user->email);

        return redirect()->route('second', ['email' => $user->email]);
    }
}
