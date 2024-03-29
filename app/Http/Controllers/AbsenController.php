<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbsenController extends Controller
{
    public function index()
    {
        return view('makeAbsen');
    }


    public function fillAbsen()
    {
        return view('fillAbsen');
    }
}
