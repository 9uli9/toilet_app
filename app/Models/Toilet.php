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

    /**
     * Get the CSV representation of the toilet.
     *
     * @return string
     */
    public function toCsv(): string
    {
        // Define the CSV format for the toilet data
        $csvData = [
            $this->id,
            "{$this->point}",
            $this->title,
            $this->type,
            $this->description,
            $this->location,
            $this->accessibility,
            $this->opening_hours,
            $this->toilet_image ?? 'toilet_image.png', // Use default image filename if toilet_image is empty
        ];

        // Convert to CSV format
        return implode(',', $csvData);
    }

        // Define relationships
        public function reviews()
        {
            return $this->hasMany(Review::class);
        }
}
