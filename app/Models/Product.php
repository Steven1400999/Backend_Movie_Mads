<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'id','name','description','price','product_category_id'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    
    public function product_category()
    {
        return $this->belongsTo(Product_category::class,'product_category_id');
    }

}
