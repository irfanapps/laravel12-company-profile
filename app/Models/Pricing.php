<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'price',
        'period',
        'description',
        'features',
        'is_featured',
        'order'
    ];

    protected $casts = [
        'features' => 'array',
        'is_featured' => 'boolean'
    ];

    public function getFormattedPriceAttribute()
    {
        return config('app.currency_symbol') . number_format($this->price, 2);
    }

    public function getPeriodTextAttribute()
    {
        return match ($this->period) {
            'month' => '/month',
            'year' => '/year',
            default => 'one-time',
        };
    }
}
