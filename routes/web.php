<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;

//Rutas publicas
Route::get('/', function () {
    return view('allPost', [
        'posts' => Post::where('active', true)->get()
    ]);
});

//Rutas privadas
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); 

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/posts',[PostController::class, 'index'])->name('posts.index');
Route::post('/posts',[PostController::class, 'store'])->name('posts.store');
Route::get('/posts/delete/{id}',[PostController::class, 'destroy'])->name('posts.destroy');

require __DIR__.'/auth.php';
