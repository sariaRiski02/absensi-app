<?php

namespace App\Http\Controllers;

use App\Models\group;
use App\Models\participant;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    public function index($slug)
    {

        return view('template-list-member', ['slug' => $slug]);
    }

    public function addParticipant(Request $request, $slug)
    {

        $id_group = group::where('slug', $slug)->first()->id;

        $request->validate([
            'name' => 'required',
            'status' => 'required'
        ]);

        participant::create([
            'name' => $request->name,
            'status' => $request->status,
            'id_group' => $id_group
        ]);

        return redirect()->back();
    }
}
