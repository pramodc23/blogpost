<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
}
