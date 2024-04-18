<?php

namespace App\Livewire;

use App\Models\participant;

use Livewire\Component;

class ListMember extends Component
{
    public $key;
    public function render()
    {


        $participants = participant::where('id_group', $this->key)->get();

        return view('livewire.list-member', compact('participants'));
    }
}
