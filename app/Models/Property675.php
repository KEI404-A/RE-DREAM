<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property675 extends Model
{
    use HasFactory;

    protected $table = 'properties_675';
    
    protected $fillable = [
        'title_675',
        'description_675',
        'price_675',
        'location_675',
        'type_675',
        'bedrooms_675',
        'bathrooms_675',
        'area_675',
        'status_675',
        'image_675'
    ];

    protected $casts = [
        'price_675' => 'decimal:2',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
}