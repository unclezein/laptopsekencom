<?php

namespace App\Livewire;

use Livewire\Component;
use App\Services\WooCommerceService;

class Wooproductnew extends Component
{
    public array $products = [];
    public string $search = '';
    public int $page = 1;
    public int $perPage = 8;
    public int $totalProducts = 0;
    public bool $isLoading = false;

    public function mount(WooCommerceService $woo)
    {
        $this->loadProducts();
    }

    public function updatedSearch()
    {
        $this->page = 1; // Reset ke halaman awal saat pencarian
        $this->loadProducts();
    }


    public function nextPage()
    {
        if ($this->page < $this->getMaxPage()) {
            $this->page++;
            $this->loadProducts();
        }
    }

    public function previousPage()
    {
        if ($this->page > 1) {
            $this->page--;
            $this->loadProducts();
        }
    }

    public function getMaxPage()
    {
        return (int) ceil($this->totalProducts / $this->perPage);
    }

    public function loadProducts()
    {
        $this->isLoading = true;

        $woo = app(WooCommerceService::class);
        $params = [
            'page' => $this->page,
            'category' => '23',
            'per_page' => $this->perPage
        ];

        if (!empty($this->search)) {
            $params['search'] = $this->search;
        }

        try {
            $result = $woo->getProducts($params);
            $this->products = $result['data'] ?? [];
            $this->totalProducts = $result['total'] ?? 0;
        } catch (\Exception $e) {
            $this->products = [];
            session()->flash('error', 'Gagal memuat produk: ' . $e->getMessage());
        } finally {
            $this->isLoading = false;
        }
    }

    public function render()
    {
        return view('livewire.woo-product-list', [
            'products' => $this->products,
            'isLoading' => $this->isLoading,
        ])->layout('livewire.layout.master', [
                    'title' => 'TOKOLAPTOPPKU',
                    'menuActive' => 'home'
                ]);
    }
}
