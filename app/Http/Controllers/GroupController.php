<?php

namespace App\Http\Controllers;

use App\Models\group;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GroupController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $id_user = Auth::id();

        group::create([
            'name' => $request->name,
            'id_user' => $id_user,
            'slug' => Str::slug($request->name) . '-' . Str::random(5),
            'code_absen' => Str::random(10),
            'deadline' => now()->addHour(1),
        ]);
        return redirect()->route('dashboard');
    }
}
