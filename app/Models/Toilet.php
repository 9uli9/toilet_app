<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// The Driver model has a one-to-many relationship with the Car model via the cars method.

class Toilet extends Model
{
    use HasFactory;

    // public function cars()
    // {
    //     return $this->hasMany(Car::class);
    // }
}
