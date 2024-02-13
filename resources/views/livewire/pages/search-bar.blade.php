<?php

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;
use App\Models\Product;

new class extends Component
{
    public string $search = '';
    public array $products = [];

    public function save()
    {
        $this->products = $this->findProducts();
        dd($this->products);
    }

    public function findProducts()
    {
        return Product::search($this->search);
    }

    public function updatedSearch()
    {
        $this->products = strlen($this->search) > 0 ? $this->findProducts() : [];
    }

    public function clear()
    {
        $this->search = '';
        $this->products = [];
    }
}
?>

<div id="search-bar" class="relative">
    <form wire:model.live="search" class="flex items-center bg-white rounded-md" role="search">
        <input
            wire:model.live="search"
            type="text"
            name="headerSearch"
            id="header-search"
            class="pl-4 text-black border-none rounded-md focus:border-none focus:ring-0" aria-label="Header Search"
            placeholder="Search..."
            autocomplete="off"
        >
        <button
            class="w-full h-full p-4 bg-orange-600 border-none rounded-r-md bg-inherit"
            type="button"
            aria-label="Search button"
        >
            <svg class="w-3 h-auto fill-white" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path
                    d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
            </svg>
        </button>
    </form>
    @if(count($products) > 0)
        <div class="absolute flex flex-col w-full p-4 text-black bg-white shadow-lg">
            @foreach($products as $product)
                <p :key="{{ $product['name'] }}">{{ $product['name'] }}</p>
            @endforeach
        </div>
    @endif
</div>
