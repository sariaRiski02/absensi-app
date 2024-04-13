<?php

namespace App\Http\Controllers;

use App\Exports\participantExport;
use App\Models\participant;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;

class DownloadController extends Controller
{

    public function download($id)
    {


        return Excel::download(new participantExport($id), 'absen.xlsx');
    }
}
