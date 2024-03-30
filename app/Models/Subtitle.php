<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subtitle extends Model
{
    use HasFactory;

    protected $fillable = ['language'];

    public function movies()
    {
        return $this->hasMany(Movie::class);
    }

}
