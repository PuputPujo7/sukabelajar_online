<?php

namespace App\Http\Livewire;

use App\Models\Galeris;
use Livewire\Component;

class Galeri extends Component
{
    public function render()
    {
        $this->galeris= Galeris::all();
        $galeris=$this->galeris;
       
        return view('livewire.galeri',compact('galeris'));
        // return view('livewire.galeri');
    }
}