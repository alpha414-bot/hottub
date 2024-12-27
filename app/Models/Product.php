<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'images' => 'array',
            'features' => 'array',
            'top_showcase' => 'array',
            'bottom_showcase' => 'array',
            'specifications' => 'array',
            'warranty' => 'array',
            'new' => 'boolean',
            'free_delivery' => 'boolean',
            'free_cover' => 'boolean',
            'free_color_matching_step' => 'boolean',
            'free_starter_chemical_kit' => 'boolean',
        ];
    }
}
