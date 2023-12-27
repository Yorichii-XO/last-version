<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SessionsController extends Controller
{
    public function create()
    {
        return view('session.login-session');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
    
        if (Auth::attempt($attributes)) {
            $user = Auth::user();
    
            session()->regenerate();
            session(['user_email' => $user->name]);
    
            // Check if the email belongs to an admin
            if ($user->email === 'admin@marwabenharda.com') {
                return redirect('admin-dashboard')->with(['success' => '']);
            } else {
                return redirect('dashboard')->with(['success' => '']);
            }
        } else {
            return back()->withErrors(['email' => 'Email or password invalid.']);
        }
    }
    
    
    public function destroy()
    {

        Auth::logout();

        return redirect('/login')->with(['success'=>'You\'ve been logged out.']);
    }
}
