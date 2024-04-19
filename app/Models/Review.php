<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['title', 'description', 'rating', 'toilet_id', 'user_id'];
    
   
    public function toilet()
    {
        return $this->belongsTo(Toilet::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
