<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'description',
        'price',
        'product_category_id'
    ];

    public function inventorys(): HasMany
    {
        return $this->hasMany(Inventory::class);

    }

    public function product_category(): BelongsTo
    {
        return $this->belongsTo(Product_category::class, 'product_category_id');
    }

}

