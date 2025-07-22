<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'client_name',
        'client_company',
        'start_date',
        'end_date',
        'project_url',
        'cover_image',
        'gallery',
        'is_featured',
        'is_active',
        'view_count'
    ];

    protected $casts = [
        'gallery' => 'array',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
        'start_date' => 'date',
        'end_date' => 'date'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
