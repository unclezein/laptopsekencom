<?php

namespace App\Livewire;

use Livewire\Component;
use App\Services\WooCommerceService;

class WooProductList extends Component
{
    public array $products = [];
    public string $search = '';
    public int $page = 1;
    public int $perPage = 8;
    public int $totalProducts = 0;
    public bool $isLoading = false;
    public array $priceRange = ['min' => 0, 'max' => 10000000]; // Default range
    public array $selectedPrice = ['min' => 0, 'max' => 10000000]; // Selected range

    public function mount(WooCommerceService $woo)
    {
        $this->loadProducts();
    }

    public function updatedSearch()
    {
        $this->page = 1;
        $this->loadProducts();
    }

    public function updatedSelectedPrice()
    {
        $this->page = 1;
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
            'category' => '20',
            'per_page' => $this->perPage,
            'min_price' => $this->selectedPrice['min'],
            'max_price' => $this->selectedPrice['max']
        ];

        if (!empty($this->search)) {
            $params['search'] = $this->search;
        }

        try {
            $result = $woo->getProducts($params);
            $this->products = $result['data'] ?? [];
            $this->totalProducts = $result['total'] ?? 0;

            // Update price range based on available products
            if (!empty($this->products)) {
                $prices = array_column($this->products, 'price');
                $this->priceRange = [
                    'min' => min($prices),
                    'max' => max($prices)
                ];
                // Reset selected price if needed
                if ($this->selectedPrice['min'] < $this->priceRange['min']) {
                    $this->selectedPrice['min'] = $this->priceRange['min'];
                }
                if ($this->selectedPrice['max'] > $this->priceRange['max']) {
                    $this->selectedPrice['max'] = $this->priceRange['max'];
                }
            }
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
                    'menuActive' => 'search'
                ]);
    }
}
