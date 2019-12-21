<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        if (Auth::check())
            return redirect()->route('dashboard');

        return redirect()->route('sign-in');
    }
}
