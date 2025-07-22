<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Permission Config
    |--------------------------------------------------------------------------
    |
    | Konfigurasi dasar untuk package spatie/laravel-permission
    |
    */

    'models' => [
        /*
        |--------------------------------------------------------------------------
        | Permission Model
        |--------------------------------------------------------------------------
        */
        'permission' => Spatie\Permission\Models\Permission::class,

        /*
        |--------------------------------------------------------------------------
        | Role Model
        |--------------------------------------------------------------------------
        */
        //'role' => Spatie\Permission\Models\Role::class,
        'role' => \App\Models\Role::class,

        'model_type' => 'App\Models\User',
    ],

    'table_names' => [
        /*
        |--------------------------------------------------------------------------
        | Nama tabel untuk permissions
        |--------------------------------------------------------------------------
        */
        'roles' => 'roles',

        /*
        |--------------------------------------------------------------------------
        | Nama tabel untuk permissions
        |--------------------------------------------------------------------------
        */
        'permissions' => 'permissions',

        /*
        |--------------------------------------------------------------------------
        | Nama tabel untuk model yang memiliki permissions
        |--------------------------------------------------------------------------
        */
        'model_has_permissions' => 'model_has_permissions',

        /*
        |--------------------------------------------------------------------------
        | Nama tabel untuk model yang memiliki roles
        |--------------------------------------------------------------------------
        */
        'model_has_roles' => 'model_has_roles',

        /*
        |--------------------------------------------------------------------------
        | Nama tabel untuk relasi roles dan permissions
        |--------------------------------------------------------------------------
        */
        'role_has_permissions' => 'role_has_permissions',
    ],

    'column_names' => [
        /*
        |--------------------------------------------------------------------------
        | Nama kolom untuk model morphedByMany
        |--------------------------------------------------------------------------
        */
        'model_morph_key' => 'model_id',
    ],

    /*
    |--------------------------------------------------------------------------
    | Disable teams
    |--------------------------------------------------------------------------
    |
    | Untuk aplikasi yang tidak membutuhkan fitur multi-team
    |
    */
    'teams' => false,

    /*
    |--------------------------------------------------------------------------
    | Cache Expiration Time
    |--------------------------------------------------------------------------
    |
    | Waktu kadaluarsa cache untuk permissions (dalam detik)
    | Default: 24 jam (86400 detik)
    |
    */
    'cache_expiration_time' => 86400,

    /*
    |--------------------------------------------------------------------------
    | Cache Key
    |--------------------------------------------------------------------------
    |
    | Key yang digunakan untuk menyimpan permissions di cache
    |
    */
    'cache_key' => 'spatie.permission.cache',

    /*
    |--------------------------------------------------------------------------
    | Cache Store
    |--------------------------------------------------------------------------
    |
    | Cache store yang digunakan (default menggunakan config cache.default)
    |
    */
    'cache_store' => 'default',

    /*
    |--------------------------------------------------------------------------
    | Super Admin Role
    |--------------------------------------------------------------------------
    |
    | Nama role yang akan dianggap sebagai super admin (memiliki semua permissions)
    | Kosongkan jika tidak menggunakan fitur ini
    |
    */
    'super_admin_role' => 'admin',

    /*
    |--------------------------------------------------------------------------
    | Display Permission in Views
    |--------------------------------------------------------------------------
    |
    | Menampilkan permission dalam format yang lebih mudah dibaca di view
    | Contoh: "Create User" menjadi "Create user"
    |
    */
    'display_permission_in_exception' => true,
    'display_role_in_exception' => true,

    /*
    |--------------------------------------------------------------------------
    | Wildcard Permission
    |--------------------------------------------------------------------------
    |
    | Mengaktifkan wildcard permission (contoh: user.*)
    |
    */
    'enable_wildcard_permission' => false,

    /*
    |--------------------------------------------------------------------------
    | Permission Directories
    |--------------------------------------------------------------------------
    |
    | Lokasi untuk menyimpan permission generator
    |
    */
    'permission_directories' => [
        app_path('Permissions'),
    ],
];
