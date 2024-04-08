<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
site.com/ => welcome
site.com/contacto => contact
site.com/blog => blog
site.com/about => about
*/

Route::view('/', 'welcome') ->name('welcome');
Route::view('/contacto', 'contact') -> name('contact');

Route::get('/blog',[PostController::class, 'index']) -> name('blog');
Route::get('/blog/1', [PostController::class. 'show']);
Route::view('/about', 'about') -> name('about');
