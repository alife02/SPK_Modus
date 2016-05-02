<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function edit()
    {
        $user = User::find(Auth::user()->id);

        return view('admin.settings', [
            'user' => $user
        ]);
    }
}
