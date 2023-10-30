<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Inventory extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'product_id',
        'stock',
        'admission_date',
        'supplier_id'
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);

    }


    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class);
    }

}

