<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function login()
    {
        return view('login');
    }
    public function authenticateUser(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->route('userDashboard');
        } else {
            return back()->withErrors(['error' => 'Invalid email or password.'])->withInput();
        }
    }
    public function register()
    {
        return view('register');
    }
    public function registerUser(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('userDashboard');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
    
    public function selectLanguage(Request $request)
    {
        return view('selectLanguage');
    }
    public function selectLevel()
    {
        return view('selectLevel');
    }
    public function courseIsReady()
    {
        return view('courseIsReady');
    }
    public function begin()
    {
        return view('begin');
    }
    public function ready()
    {
        return view('courseIsReady');
    }
}

?>