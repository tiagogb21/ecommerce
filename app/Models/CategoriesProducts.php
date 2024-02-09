<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class CategoriesProducts extends Pivot
{
    use HasFactory;

    protected $fillable = ['product_id', 'category_id'];
}
