<?php

namespace App\Http\Livewire;

use App\Models\Galeris;
use Livewire\Component;

class GaleriDetail extends Component
{
    public function mount($id)
    {

        $this->galeris = Galeris::findOrFail($id);

    }
    
    public function render()
    {
        $galeris = $this->galeris;

        // dd($slider);

        return view('livewire.galeri-detail',compact('galeris'));
    }
}