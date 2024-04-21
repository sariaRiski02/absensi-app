<?php

namespace App\Http\Controllers;

use App\Models\group;
use App\Models\participant;
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

    public function addParticipant(Request $request, $idGroup)
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required'
        ]);

        participant::create([
            'name' => $request->name,
            'status' => $request->status,
            'id_group' => $idGroup
        ]);

        return redirect()->back();
    }
}
