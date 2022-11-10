<?php

namespace App\Http\Controllers;

use App\Http\Requests\v1\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * For Authenticating user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse 
     */ 
    public function authenticate(AuthRequest $request) 
    {
        if (Auth::attempt($request->validated())) {
            $request->session()->regenerate();

            if ($request->user()->role === 'teacher') {
                return redirect()->route('home.teacher');
            }

            return redirect()->route('home.student');
        }

        return back()->withErrors([
            'email' => 'Tidak ada data yang cocok'
        ]);
    }

    /**
     * For Logging out user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse 
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerate();

        return redirect()->route('login');
    }
}
