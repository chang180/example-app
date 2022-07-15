<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'address',
        'city',
        'country',
        'zip',
        'price',
        'type',
        'status',
        'bedrooms',
        'bathrooms',
        'garage',
        'area',
        'image',
    ];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
