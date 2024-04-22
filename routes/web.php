<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes: En laravel el orden de las Rutas si importa
| por lo general se dejan al final las rutas que reciban parametros variables
|--------------------------------------------------------------------------
site.com/ => welcome
site.com/contacto => contact
site.com/blog => blog
site.com/about => about
*/

Route::view('/', 'welcome') ->name('welcome');
Route::view('/contacto', 'contact') -> name('contact');

// Route::get('/blog',[PostController::class, 'index']) -> name('posts.index');
// Route::get('/blog/crear', [PostController::class, 'create']) -> name('posts.create');
// Route::post('/blog', [PostController::class, 'store']) -> name('posts.store');
// Route::get('/blog/{post}', [PostController::class, 'show'])-> name('posts.show');
// Route::get('/blog/{post}/editar', [PostController::class, 'edit'])-> name('posts.edit');
// Route::patch('/blog/{post}', [PostController::class, 'update'])-> name('posts.update');
// Route::delete('/blog/{post}', [PostController::class, 'destroy'])-> name('posts.destroy');
Route::resource('blog', PostController::class, [
    'names' => 'posts',
    'parameters' => ['blog'=>'post'],
]);

Route::view('/about', 'about') -> name('about');
