<?php

namespace App\Models;

use Spatie\Permission\Models\Role as SpatieRole;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends SpatieRole
{
    /**
     * Relasi many-to-many dengan model User.
     * Menggunakan tabel pivot model_has_roles.
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(
            config('auth.providers.users.model'), // Model User
            config('permission.table_names.model_has_roles'), // Tabel pivot
            'role_id', // FK di tabel pivot untuk role
            config('permission.column_names.model_morph_key') // FK untuk user
        )->withTimestamps();
    }

    /**
     * Scope untuk mencari role berdasarkan nama
     */
    public function scopeByName($query, $name)
    {
        return $query->where('name', $name);
    }

    /**
     * Attribute accessor untuk jumlah user
     */
    public function getUserCountAttribute(): int
    {
        return $this->users()->count();
    }

    /**
     * Attribute accessor untuk daftar user
     */
    public function getUserListAttribute()
    {
        return $this->users()->pluck('name', 'id');
    }
}
