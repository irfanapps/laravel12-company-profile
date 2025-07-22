<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles, SoftDeletes, LogsActivity;

    protected $fillable = [
        'name',
        'email',
        'password'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $dates = ['deleted_at'];

    public function hasRole($role)
    {
        return $this->role === $role;
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['name', 'email', 'role', 'is_active'])
            ->logOnlyDirty()
            ->dontSubmitEmptyLogs()
            ->setDescriptionForEvent(function (string $eventName) {
                return "User {$eventName}";
            });
    }

    // public function roles()
    // {
    //     return $this->belongsToMany(
    //         config('permission.models.role'),
    //         config('permission.table_names.model_has_roles'),
    //         config('permission.column_names.model_morph_key'),
    //         'role_id'
    //     );
    // }

    // /**
    //  * Scope untuk mencari user berdasarkan role
    //  */
    // public function scopeWithRole($query, $roleName)
    // {
    //     return $query->whereHas('roles', function ($q) use ($roleName) {
    //         $q->where('name', $roleName);
    //     });
    // }

    // public function hasAnyRole($roles, $guard = null): bool
    // {
    //     if (is_string($roles)) {
    //         $roles = explode('|', $roles);
    //     }

    //     if (! is_array($roles)) {
    //         $roles = [$roles];
    //     }

    //     foreach ($roles as $role) {
    //         if ($this->hasRole($role, $guard)) {
    //             return true;
    //         }
    //     }

    //     return false;
    // }
}
