<?php

namespace App\Http\Controllers;

use App\Models\group;

use App\Models\participant;
use Illuminate\Http\Request;
use function Laravel\Prompts\alert;
use Illuminate\Support\Facades\Validator;

class AbsenController extends Controller
{

    public function fillAbsen()
    {
        return view('fillAbsen');
    }

    public function store(Request $request)
    {

        $data = [
            'name' => $request->name,
            'absencode' => $request->absencode,
        ];
        $rule =  [
            'name' => 'required|max:255|min:3',

            'absencode' => 'required|max:255',
        ];

        $message = [
            'name.required' => 'Nama tidak boleh kosong',
            'name.max' => 'Nama maksimal 255 karakter',
            'name.min' => 'Nama minimal 3 karakter',
            'absencode.required' => 'Kode absen tidak boleh kosong',
            'absencode.max' => 'Kode absen maksimal 255 karakter',
        ];

        $validated = Validator::make(

            $data,
            $rule,
            $message

        );

        if ($validated->fails()) {
            return redirect()->back()->withErrors($validated)->withInput();
        }

        $record = group::where('code_absen', $request->absencode)->first();

        if (!empty($recod) && $record->deadline > now()) {
            participant::create([
                'name' => $request->name,
                'status' => 'hadir',
                'id_group' => $record->id,
            ]);
            return redirect()->back()->with('success', 'Absen berhasil diisi');
        }

        return redirect()->route('absen.fill')->with('error', 'Kode absen tidak ditemukan atau sudah kadaluarsa');
    }
}
