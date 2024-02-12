<?php

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    /**
     * Handle products in home.
     */
    public function home(): void
    {
        $this->products = Product::inRandomOrder()->take(3)->get();
    }
}; ?>

@section('meta_keywords', 'teste')
@section('meta_description', 'teste')

<div class="min-h-screen py-12">

</div>
