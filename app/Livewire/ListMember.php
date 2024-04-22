<?php

namespace App\Livewire;

use App\Models\group;

use Livewire\Component;
use App\Models\participant;

class ListMember extends Component
{
    public $slug;

    public function render()
    {


        $participants = group::where('slug', $this->slug)->first()->participant;


        $key = group::where('slug', $this->slug)->first();
        $codeAbsen = $key->code_absen;



        return view('livewire.list-member', compact('participants', 'codeAbsen'));
    }
}
