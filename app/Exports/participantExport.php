<?php

namespace App\Exports;

use App\Models\participant;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ToArray;

class participantExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    protected $id;
    public function __construct($id)
    {
        $this->id = $id;
    }
    public function collection()
    {
        $data =  participant::where('id_group', $this->id)->get(['name', 'status', 'created_at']);

        $header = [
            'Nama',
            'Status',

        ];

        $formattedData = $data->map(function ($item) {
            return [
                'Name' => $item->name,
                'Status' => $item->status,

            ];
        });


        return collect([$header])->concat($formattedData);
    }
}
