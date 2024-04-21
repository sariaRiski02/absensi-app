<?php

namespace App\Livewire;

use App\Models\group;

use Livewire\Component;
use App\Models\participant;

class ListMember extends Component
{
    public $key;
    public $search = '';
    public function render()
    {


        if (!$this->search == '') {

            $participant = participant::where('name', 'like', '%' . $this->search . '%')->where('id_group', $this->key)->get();
        } else {
            $participants = participant::where('id_group', $this->key)->get();
        }

        $key = group::where('id', $this->key)->first();
        $codeAbsen = $key->code_absen;



        return view('livewire.list-member', compact('participants', 'codeAbsen'));
    }
}
