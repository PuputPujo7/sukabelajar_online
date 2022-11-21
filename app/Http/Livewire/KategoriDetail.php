<?php

namespace App\Http\Livewire;

use App\Models\Kategoris;
use Livewire\Component;

class KategoriDetail extends Component
{
    public function mount($id)
    {

        $this->kategoris = Kategoris::findOrFail($id);

    }
    
    public function render()
    {
        $kategoris = $this->pakets;

        // dd($slider);

        return view('livewire.kategori-detail',compact('kategoris'));
    }
}
