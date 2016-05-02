<?php

namespace App\Http\Controllers;

use App\Criteria;
use Illuminate\Http\Request;

use App\Http\Requests;

class CriteriasController extends Controller
{
    public function index()
    {
        dd(Criteria::all());
        return view("auth.login");
    }

    public function hitungSPK()
    {
        
    }
}
