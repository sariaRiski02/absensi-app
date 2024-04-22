<?php

namespace App\Http\Controllers;

use App\Models\group;
use App\Models\participant;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request, $id)
    {


        $duration = (int) $request->input('duration');

        $group = group::find($id);
        $group->update([
            'code_absen' => strtoupper(Str::random(6)),
            'deadline' => now()->addHours($duration),
        ]);

        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $validated = $request->validate([
            'name' => 'required',
        ]);


        group::create($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        participant::where('id', $id)->delete();
        return redirect()->back();
    }
}
