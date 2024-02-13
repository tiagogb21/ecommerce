<?php

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;
use App\Models\Product;

new #[Layout('layouts.guest')] class extends Component
{
    public array $products = [];

    public function mount(): void
    {
        $this->loadProducts();
    }

    public function loadProducts(): void
    {
        $this->products = Product::paginate(4)
            ->getCollection()
            ->toArray();
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
