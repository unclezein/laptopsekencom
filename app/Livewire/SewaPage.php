<?php

namespace App\Livewire;

use Livewire\Component;

class SewaPage extends Component
{
    public function render()
    {
        return view('livewire.sewa-page')->layout('livewire.layout.master', ['title' => 'Sewa - TOKOLAPTOPPKU', 'menuActive' => 'sewa',]);
    }
}
