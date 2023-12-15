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
    
    public function edit_user($id_user, Request $request)
    {
        $user = User::where('id_user', $id_user)->first();

        return view('admin.user.edit.user', [
            'user' => $user,
        ]);    
    }

    public function edit_user_action($id_user, Request $request)
    {   
        $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'role' => 'required',
        ]);

        $user = User::where('id_user', $id_user)->first();
        $user->nama = $request->input('nama');
        $user->username = $request->input('username');
        $user->role = $request->input('role');
        $user->save();

        return redirect('/user')->with('success', 'Account has been edited !');
    }

    public function delete_user_action($id_user)
    {

        $user = User::find($id_user);
        $user->delete();

        return redirect()->back()->with('success', 'Account has been deleted !');
    }

}
