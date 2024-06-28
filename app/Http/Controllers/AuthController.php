<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
      return view('login');
    }

    public function signup()
    {
        return view('signup');
    }

    public function add(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|string|min:8',
        ]);
        
        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']); 
        $user->save();

        $user->assignRole('employer');
        return redirect()->route('login')->with('success', 'Account created successfully! Please login to continue.');

    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            $user = Auth::user();
            $roles = $user->getRoleNames();
            if($roles[0] == 'employer')
            {
                return redirect('dashboard');
            }
            else
            {
                return back()->withErrors('Login Failed'); 
            }
            
        }
        else
        {
            return back()->withErrors('Login Failed');
        }
    }
}
