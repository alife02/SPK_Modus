<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::user()->status == "admin") {
            return redirect('admin');
        } else {
            return view('employee.home');
        }
    }

    public function admin()
    {
        if (Auth::user()->status == "admin") {
            return view('admin.home');
        } else {
            return redirect('/');
        }
    }
}
