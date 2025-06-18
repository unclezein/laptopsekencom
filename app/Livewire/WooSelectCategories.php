<?php

namespace App\Livewire;

use Livewire\Component;
use App\Services\WooCommerceService;

class WooSelectCategories extends Component
{
    public $categories = [];
    public $selectedCategory = '';

    public function mount(WooCommerceService $woo)
    {
        $this->categories = $woo->getCategories();
    }

    public function render()
    {
        return view('livewire.woo-select-categories');
    }
}
