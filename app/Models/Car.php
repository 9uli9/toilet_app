<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// The Car model serves as the representation of a car entity.

// It features mass-assignable attributes outlined in the $fillable property.

// The Car model has a many-to-many relationship with the Race model via the races method
// and a many-to-one relationship with the Driver model via the driver method.

// The records pivot table is being referenced.

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'model', 
        'manufacturer', 
        'type',
        'fuel',
        'colour', 
        'vin', 
        'vrm',
        'driver_id',
        'car_image'
    ];

    public function races()
    {
        return $this->belongsToMany(Race::class, 'records')
            ->withPivot('start_time', 'finish_time', 'position')
            ->withTimestamps();
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }
}
