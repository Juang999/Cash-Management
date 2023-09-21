<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use App\Http\Requests\Auth\UpdateProfile;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\UpdateEmailRequest;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request) {
        $credentiasl = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (Auth::attempt($credentiasl)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'email atau password salah!'
        ])->onlyInput(['email', 'password']);
    }

    public function updateProfile(UpdateProfile $request) {
        try {
            User::where([
                'id' => Auth::user()->id
            ])->update([
                'name' => $request->name,
                'phone_number' => $request->phone_number,
                'password' => $request->password
            ]);

            return redirect()->to('/settings')->with(['success' => 'user profile updated']);
        } catch (\Throwable $th) {
            return redirect()->to('/settings')->with(['failed' => $th->getMessage()]);
        }
    }

    public function updateEmail(UpdateEmailRequest $request) {
        try {
            User::where([
                'id' => Auth::user()->id
            ])->update([
                'email' => $request->email
            ]);

            return redirect()->to('/settings')->with(['success' => 'email updated!']);
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->to('/settings')->with(['failed' => $th->getMessage()]);
        }
    }
}
