<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Author;
use App\Models\Book;

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
    return view('welcome');
});

// routes/web.php
Route::get('/profile/{id}', function ($id) {
    $user = User::find($id);
    $profile = $user->profile;

    return view('profiles.show', compact('user', 'profile'));
});

// routes/web.php
Route::get('/author/{id}', function ($id) {
    $author = Author::find($id);
    $books = $author->books;

    return view('authors.show', compact('author', 'books'));
});

