<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = [
        'id','product_id','stock','admission_date','supplier_id'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'producto_id');
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplier_id');
    }

}
