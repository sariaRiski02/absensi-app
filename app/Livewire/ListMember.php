<?php

namespace App\Livewire;

use App\Models\participant;

use Livewire\Component;

class ListMember extends Component
{
    public function render($id)
    {

        $data = participant::where('id_group', $id)->get();



        return view('livewire.list-member', compact('data', 'id'));
    }
}
