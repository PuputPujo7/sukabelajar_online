<?php

namespace App\Http\Livewire;

use App\Models\Pakets;
use Livewire\Component;

class PaketDetail extends Component
{
    public function mount($id)
    {

        $this->pakets = Pakets::findOrFail($id);

    }
    
    public function render()
    {
        $pakets = $this->pakets;

        // dd($slider);

        return view('livewire.paket-detail',compact('pakets'));
    }
}
