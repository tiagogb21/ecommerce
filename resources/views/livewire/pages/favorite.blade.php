<?php

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;
use App\Models\Favorite;

new class extends Component {
    public $favorite = true;

    public $product;

    public function mount($product)
    {
        $this->product = $product;
    }

    public function markProductAsFavorite($product_id)
    {
        return Favorite::create([
            'product_id' => $product_id,
            'user_id' => auth()->user()->id,
        ]);
    }

    public function removeProductFromFavorite($product_id)
    {
        return Favorite::where([
            'product_id' => $product_id,
            'user_id' => auth()->user()->id,
        ])->delete();
    }

    public function toggleFavorite($product_id)
    {
        if(empty(auth()->user())) {
            return $this->redirect('/login');
        }

        $this->favorite ? $this->removeProductFromFavorite($product_id) : $this->markProductAsFavorite($product_id);
        $this->favorite = !$this->favorite;
    }
};
?>

<div
    id="favorite-icon"
    class="absolute top-0 right-0 cursor-pointer"
    wire:click="toggleFavorite({{ $product['id'] }})"
>
    @if ($favorite)
        <div class="w-4 h-auto fill-black">
            {!! file_get_contents(public_path('assets/heart.svg')) !!}
        </div>
    @else
        <div class="w-4 h-auto fill-black">
            {!! file_get_contents(public_path('assets/black-heart.svg')) !!}
        </div>
    @endif
</div>
