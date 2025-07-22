<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'content',
        'image',
        'mission',
        'vision',
        'values'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'values' => 'array',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    /**
     * Get the URL for the about image
     *
     * @return string
     */
    public function getImageUrlAttribute()
    {
        if ($this->image) {
            return asset('storage/about/' . $this->image);
        }

        return asset('images/default-about.jpg');
    }

    /**
     * Scope to search in about content
     */
    public function scopeSearch($query, $term)
    {
        return $query->where(function ($query) use ($term) {
            $query->where('title', 'like', "%$term%")
                ->orWhere('content', 'like', "%$term%")
                ->orWhere('mission', 'like', "%$term%")
                ->orWhere('vision', 'like', "%$term%");
        });
    }
}
