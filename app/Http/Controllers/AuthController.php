<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function newLogin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required', 'password' => 'required',
        ]);

        $username = Auth::attempt(['username' => $request->get('username'), 'password' => $request->get('password')]);
        $email = Auth::attempt(['email'=> $request->get('username'), 'password' => $request->get('password')]);

        if ($username) {
            Auth::login(User::where('username', $request->get('username'))->first());
        }
        elseif ($email)
        {
            Auth::login(User::where('email', $request->get('username'))->first());
        }
        else
        {
            return redirect('login')->withErrors('username atau email tidak cocok');
        }

        return redirect('/');
    }
}
