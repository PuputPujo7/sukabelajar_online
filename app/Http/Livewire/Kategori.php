<?php

namespace App\Http\Livewire;

use App\Models\Kategoris;
use Livewire\Component;

class Kategori extends Component
{
    public function render()
    {
        $this->kategoris= Kategoris::all();
        $kategoris=$this->kategoris;
       
        return view('livewire.kategori',compact('kategoris'));
    }
}