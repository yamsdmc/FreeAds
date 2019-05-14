<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function profile()
    {
        $id = Auth::user()->id;
        $profile = User::all()->where('id', $id);
        return view('profile', compact('profile'));
    }
    public function update(Request $request)
    {
        $id = Auth::user()->id;
        $password = Hash::make(request('password'));
        $update = User::where('id', $id)->update([
           'username' => request('username'),
            'email' => request('email'),
            'name' => request('name'),
            'lastname' => request('lastname'),
            'password' => $password
        ]);
        return redirect()->back()->with('success', 'Your information was good to modify');
    }
}
