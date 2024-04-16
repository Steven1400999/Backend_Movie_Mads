<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'movie_id',
        'start_time',
        'end_time',
        'room',
        'total_capacity',
        'available_seats',

    ];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

}
