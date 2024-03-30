<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'duration',
        'image',
        'language_id',
        'dubbing_id',
        'subtitle_id'
    ];

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

}
