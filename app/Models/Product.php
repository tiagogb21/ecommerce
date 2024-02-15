<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

const SEARCH_NUMBER = 5;

class Product extends Model {
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'brand_id',
        'category_id',
        'name',
        'slug',
        'description',
        'technical_description',
    ];

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function skus(): HasMany
    {
        return $this->hasMany(Sku::class);
    }

    public static function search($search, $option = 'name')
    {
        $searchTerm = "%{$search}%";

        return Product::where($option, 'ilike', $searchTerm)
            ->paginate(SEARCH_NUMBER)
            ->getCollection()
            ->toArray();
    }

    public static function isFavoriteByUser(User $user, $product)
    {
        return $user->favorites()
            ->where('product_id', $product['id'])
            ->exists();
    }
}
