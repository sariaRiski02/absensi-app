<?php

namespace App\Http\Controllers;

use App\Models\group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $data = group::where('id_user', $user->id)->get();

        // dd($data);
        return view('dashboard', compact('data'));
    }
}
