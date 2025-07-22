<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\ProjectController as ProjectFrontend;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.business.home');
})->name('business');;

Route::get('/applications', function () {
    return view('frontend.applications.home');
})->name('applications');

//Route::get('/users/export-excel', [UserController::class, 'exportExcel'])->name('users.export.excel');

Route::prefix('admin')->middleware(['auth'])->group(function () {
    //Route::resource('services', ServiceController::class);
    Route::resource('services', ServiceController::class)->names([
        'index' => 'admin.services.index',
        'create' => 'admin.services.create',
        'store' => 'admin.services.store',
        'show' => 'admin.services.show',
        'edit' => 'admin.services.edit',
        'update' => 'admin.services.update',
        'destroy' => 'admin.services.destroy'
    ]);

    //Route::resource('teams', TeamController::class);

    Route::resource('teams', TeamController::class)->names([
        'index' => 'admin.teams.index',
        'create' => 'admin.teams.create',
        'store' => 'admin.teams.store',
        'show' => 'admin.teams.show',
        'edit' => 'admin.teams.edit',
        'update' => 'admin.teams.update',
        'destroy' => 'admin.teams.destroy'
    ]);

    Route::resource('categories', CategoryController::class)->names('admin.categories');
    Route::resource('projects', ProjectController::class)->names('admin.projects');
    Route::resource('blogs', BlogController::class)->except('show')->names([
        'index' => 'admin.blogs.index',
        'create' => 'admin.blogs.create',
        'store' => 'admin.blogs.store',
        'edit' => 'admin.blogs.edit',
        'update' => 'admin.blogs.update',
        'destroy' => 'admin.blogs.destroy'
    ]);
    Route::get('blogs/{blog}', [BlogController::class, 'show'])->name('admin.blogs.show');
    Route::get('blogs/trash', [BlogController::class, 'trash'])->name('admin.blogs.trash');
    Route::patch('blogs/{id}/restore', [BlogController::class, 'restore'])->name('admin.blogs.restore');
    Route::delete('blogs/{id}/force-delete', [BlogController::class, 'forceDelete'])->name('admin.blogs.force-delete');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('admin.dashboard');
});

Route::get('/projects', [ProjectFrontend::class, 'index'])->name('projects.index');
Route::get('/projects/{project}', [ProjectFrontend::class, 'show'])->name('projects.show');


Route::middleware('auth', 'verified')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/logs', [LogController::class, 'index'])->name('logs.index');
    Route::get('/logs/{activity}', [LogController::class, 'show'])->name('logs.show');

    Route::get('/messages', [ContactController::class, 'index'])->name('contact.index');
    Route::get('/messages/{contact}', [ContactController::class, 'show'])->name('contact.show');
    Route::delete('/messages/{contact}', [ContactController::class, 'destroy'])->name('contact.destroy');

    // Admin-only routes
    Route::middleware(['role:admin'])->group(function () {
        Route::resource('users', UserController::class);

        // Route untuk soft delete
        Route::post('/{user}/restore', [UserController::class, 'restore']);
        Route::delete('/{user}/force-delete', [UserController::class, 'forceDelete']);
    });
});

require __DIR__ . '/auth.php';
