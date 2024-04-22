<?php

namespace App\Http\Controllers;

use App\Models\group;

use App\Models\participant;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class fillAttandanceController extends Controller
{

    public function attandance()
    {
        return view('attandance');
    }

    public function storeAttandance(Request $request)
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
            return redirect()->back()
                ->withErrors($validated)
                ->withInput();
        }

        $record = group::where('code_absen', $request->absencode)->first();

        if (!empty($record) && $record->deadline > now()) {
            participant::create([
                'name' => $request->name,
                'status' => 'Hadir',
                'id_group' => $record->id,
            ]);
            return redirect()
                ->route('absen.fill')
                ->with('success', 'Absen berhasil diisi');
        }

        return redirect()
            ->route('absen.fill')
            ->with('error', 'Kode absen tidak ditemukan atau sudah kadaluarsa');
    }
}
