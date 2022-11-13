<?php

namespace App\Http\Livewire;

use App\Models\Pakets;
use Livewire\Component;

class Umroh extends Component
{
    public function render()
    {
        $this->pakets= Pakets::all();
        $pakets=$this->pakets;
       
        return view('livewire.umroh',compact('pakets'));
    }
    
}
