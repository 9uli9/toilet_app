<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// The Race model also has a many-to-many relationship with the Car model via the cars method.

// The records pivot table is also being referenced.

class Race extends Model
{
    use HasFactory;
    public function cars()
    {
        return $this->belongsToMany(Car::class, 'records')
            ->withPivot('start_time', 'finish_time', 'position')
            ->withTimestamps();
    }
}
