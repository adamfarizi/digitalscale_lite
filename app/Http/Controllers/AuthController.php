<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('guest.login');
    }

    public function login_action(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $infologin = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            if (Auth::user() && (Auth::user()->role == 'admin')) {
                $request->session()->regenerate();
                return redirect('dashboard');
            } 
            elseif (Auth::user() && (Auth::user()->role == 'petugas')) {
                $request->session()->regenerate();
                return redirect('dashboard');
            }
            elseif (Auth::user() && (Auth::user()->role == 'koordinator')) {
                $request->session()->regenerate();
                return redirect('dashboard');            
            }
            elseif (Auth::user() && (Auth::user()->role == 'supervisor')) {
                $request->session()->regenerate();
                return redirect('dashboard');            
            }
            elseif (Auth::user() && (Auth::user()->role == 'owner')) {
                $request->session()->regenerate();
                return redirect('dashboard');            
            }
            else {
                return redirect('/')->withErrors('Your account is not registered');
            }
        } else {
            return redirect('/')->withErrors('Your username and password are incorrect !')->withInput();
        }
    }

    public function register()
    {
        return view('guest.register',);
    }

    public function register_action(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'username' => 'required|unique:users',
            'password' => 'required',
            'konfirmasi_password' => 'required|same:password',
        ]);
        $user = new User([
            'nama' => $request->nama,
            'username' => $request->username,
            'role' => $request->role ?? 'petugas',
            'password' => Hash::make($request->password),
        ]);
        $user->save();
        return redirect('/')->with('success', 'Account has been successfully registered, please sign in !');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
