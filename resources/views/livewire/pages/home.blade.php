<?php

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\{Layout, Title};
use Livewire\Volt\Component;
use App\Models\Product;

new
#[Layout('layouts.guest')]
#[Title('Home')]
class extends Component
{
    public array $products = [];
    public array $sku = [];

    public function mount(): void
    {
        $this->loadProducts();
    }

    public function loadProducts(): void
    {
        $this->products = Product::with('skus')
            ->paginate(4)
            ->getCollection()
            ->toArray();
        // dd($this->products);
    }
}; ?>

@section('meta_keywords', 'home')
@section('meta_description', 'home page')

<div class="flex flex-col min-h-screen gap-10 lg:px-12">
    <x-carousel />

    <div class="grid grid-cols-2 gap-4 lg:grid-cols-4">
        @foreach($products as $product)
            <x-product-card :product="$product" :key="$product['name']" />
        @endforeach
    </div>
</div>
