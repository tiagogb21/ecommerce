<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderSku extends Pivot {

    use HasFactory, SoftDeletes;

    protected $fillable = [
        'order_id',
        'sku_id',
        'product',
        'quantity',
        'unitary_price',
    ];

    protected $casts = [
        'product' => 'json'
    ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function sku(): BelongsTo
    {
        return $this->belongsTo(Sku::class);
    }

    public function addQuantity(int $quantity): void
    {
        $this->increment('quantity', $quantity);
        $this->order->incrementTotal($this->unitary_price * $quantity);
    }

    public function removeQuantity(int $quantity): void
    {
        $this->decrement('quantity', $quantity);
        $this->order->decrementTotal($this->unitary_price * $quantity);
    }
}
