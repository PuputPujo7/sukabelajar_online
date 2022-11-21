<?php

namespace App\Http\Livewire;

use App\Models\Kategoris;
use Livewire\Component;

class Umroh extends Component
{
    public function render()
    {
        $this->kategoris= Kategoris::all();
        $kategoris=$this->kategoris;
       
        return view('livewire.umroh',compact('kategoris'));
    }
    
}
