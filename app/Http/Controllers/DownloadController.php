<?php

namespace App\Http\Controllers;

use App\Models\participant;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;

class DownloadController extends Controller
{

    public function download()
    {

        return Excel::store(participant::all(), 'absen.xlsx', 'public');
    }
}
