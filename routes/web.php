<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('main.index');
})->name('main');
Route::get('/projects', [ProjectController::class, 'index'])
    ->name('projects');
Route::get('/projects/{id}', [ProjectController::class, 'show'])
    ->where('id', '\d+')
    ->name('projects.show');
Route::get('/posts', [PostController::class, 'index'])
    ->name('posts');
Route::get('/posts/{id}', [PostController::class, 'show'])
    ->where('id', '\d+')
    ->name('posts.show');
Route::get('/contact', function () {
    return view('contacts.index');
})->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])
        ->name('profile.show');
    Route::get('/profile/create', [ProfileController::class, 'create'])
        ->name('profile.create');
    Route::post('profile/store/{id}', [ProfileController::class, 'store'])
        ->where('id', '\d+')
        ->name('profile.store');
    Route::get('/profile/edit/{id}', [ProfileController::class, 'edit'])
        ->where('id', '\d+')
        ->name('profile.edit');
    Route::patch('/profile/update/{id}', [ProfileController::class, 'update'])
        ->where('id', '\d+')
        ->name('profile.update');
    Route::patch('/profile/user/{id}', [ProfileController::class, 'userUpdate'])
        ->where('id', '\d+')
        ->name('profile.user_update');
    Route::delete('/profile/destroy', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});

require __DIR__.'/auth.php';
