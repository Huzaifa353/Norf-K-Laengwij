<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('user/dashboard');
    }
    public function learn()
    {
        return view('user/learn');
    }
    public function achievements()
    {
        return view('user/achievements');
    }
    public function settings()
    {
        return view('user/settings');
    }
    public function help()
    {
        return view('user/help');
    }
}
?>