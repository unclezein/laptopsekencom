<?php

namespace App\Livewire;

use Livewire\Component;
use App\Services\WooCommerceService;

class WooProductListHome extends Component
{
    public array $products = [];
    public int $page = 1;
    public int $perPage = 8;
    public int $totalProducts = 0;

    public function mount(WooCommerceService $woo)
    {
        $this->loadProducts($woo);
    }

    public function updatedPage()
    {
        $woo = app(WooCommerceService::class);
        $this->loadProducts($woo);
    }

    public function nextPage()
    {
        if ($this->page < $this->getMaxPage()) {
            $this->page++;
            $this->updatedPage();
        }
    }

    public function previousPage()
    {
        if ($this->page > 1) {
            $this->page--;
            $this->updatedPage();
        }
    }

    protected function loadProducts(WooCommerceService $woo)
    {
        $result = $woo->getProducts(['page' => $this->page, 'per_page' => $this->perPage]);
        $this->products = $result['data'];
        $this->totalProducts = $result['total'];
    }

    public function getMaxPage()
    {
        return (int) ceil($this->totalProducts / $this->perPage);
    }

    public function render()
    {
        return view('livewire.woo-product-list-home')->layout('livewire.layout.master', ['title' => 'Home - TOKOLAPTOPPKU', 'menuActive' => 'home',]);
    }
}

