<?php

namespace App\Livewire;

use Livewire\Component;

class About extends Component
{
    public function render()
    {
        return view('about')->layout('livewire.layout.master', ['title' => 'About - TOKOLAPTOPPKU', 'menuActive' => 'about',]);
    }
}
