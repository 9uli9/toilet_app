<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toilet extends Model
{
    protected $fillable = [
        'point',
        'title',
        'type',
        'description',
        'location',
        'accessibility',
        'opening_hours',
        'toilet_image',
    ];
}
