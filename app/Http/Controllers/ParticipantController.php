<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    public function index()
    {
        $url = url()->current();
        $array_url = explode('/', $url);
        $key = last($array_url);
        return view('template-list-member', compact('key'));
    }
}
