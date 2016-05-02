<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class NavController extends Controller
{
    public function dashboard()
    {
        return view('admin.contents.dashboard');
    }

    public function employees()
    {
        $users = User::where('status', 'employee')->get();

        return view('admin.contents.employees', [
            'users' => $users
        ]);
    }
}
