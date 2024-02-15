<?php

use Livewire\Volt\Component;

new class extends Component {
    public $addProduct = false;

    public $product;

    public function mount($product)
    {
        $this->product = $product;
        if(auth()->user()) {
            $this->favorite = Product::isFavoriteByUser(auth()->user(), $product);
        }
    }

    public function addProductToCart($product_id)
    {
        $user_id = auth()->user()-id;

        $order = Order::where('user_id', $user->id)
            ->whereNull('completed_at')
            ->first();

        if($order)
        {
            $order = Order::create([
                'user_id' => auth()->user()->id,
                'session_id' =>
                'total' => 0,
                'status' => Status::pending,
            ]);
        }

        return OrderSku::where('order_id', auth()->user()->id)->create([
            'product_id' => $product_id,
            'quantity' => 1,
            'unitary_price' => $this->product->price,
        ]);
    }

    public function removeProductFromCart($product_id)
    {
        return OrderSku::where([
            'user_id' => auth()->user()->id,
            'product_id' => $product_id,
        ])->delete();
    }

    public function toggleAddRemoveCart($product_id)
    {
        if (empty(auth()->user())) {
            return $this->redirect('/login');
        }

        $this->favorite ? $this->removeProductFromCart($product_id) : $this->addProductToCart($product_id);

        $this->addProduct = !$this->addProduct;
    }
};
?>

<div>

</div>
