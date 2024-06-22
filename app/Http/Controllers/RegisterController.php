<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class RegisterController extends Controller
{
    public function show()
    {
        return view('register');
    }

    public function store(Request $request): RedirectResponse
    {
        $validator = $request->validate([
            'namaInput' => 'required',
            'emailInput' => 'required|email',
            'nimInput' => 'required|numeric',
            'passwordInput' => 'required|min:8|confirmed',
        ]);

        $query = User::create([
            'name' => $request->namaInput,
            'email' => $request->emailInput,
            'nim' => $request->nimInput,
            'password' => Hash::make($request->passwordInput),
            'is_admin' => 0
        ]);

        if ($query) {
            return redirect()->route('login');
        }else{
            return redirect()->back();
        }
    }

}
