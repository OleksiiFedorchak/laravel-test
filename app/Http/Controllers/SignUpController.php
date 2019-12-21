<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidateSignUpRequest;

class SignUpController extends Controller
{
    public function showSignUp()
    {
        return view('sign-up');
    }

    public function signUp(ValidateSignUpRequest $request)
    {
        dd($_FILES);
        dd($request->file('avatar'));
    }
}
