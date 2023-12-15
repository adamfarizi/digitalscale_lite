<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
    
        return view('admin.user.user', [
            'users' => $users,
        ]);
    }

    public function register_action(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'username' => 'required|unique:users',
            'role' => 'required',
            'password' => 'required',
            'konfirmasi_password' => 'required|same:password',
        ]);
        if ($request->role === 'null') {
            return back()->withErrors('Your must choose role !');
        }
        else{
            $user = new User([
                'nama' => $request->nama,
                'username' => $request->username,
                'role' => $request->role ?? 'petugas',
                'password' => Hash::make($request->password),
            ]);
            $user->save();
            return back()->with('success', 'Account has been successfully registered !');
        }
    }
    
}
