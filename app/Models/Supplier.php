<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','name', 'email', 'password', 'rol_id'
    ];

    public function supplier()
{
    return $this->belongsTo(Supplier::class);
}


}
