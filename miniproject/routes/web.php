<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustmerAuthController;
use App\Http\Controllers\PostController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/regestration', function () {
//     return view('regestration');
// });
// Route::get('/login', function () {
//     return view('login');
// });
 Route::get('/',[CustmerAuthController::class,'home']);
 Route::get('dashboard',[CustmerAuthController::class,'dashboard']);
 Route::get('login',[CustmerAuthController::class,'index'])->name('login');
 Route::post('postlogin',[CustmerAuthController::class,'login'])->name('postlogin');
 Route::get('signup',[CustmerAuthController::class,'signup'])->name('regestration');
 Route::post('postsignup',[CustmerAuthController::class,'signupsave'])->name('postsignup');
 Route::get('signout',[CustmerAuthController::class,'signOut'])->name('signout');

 Route::get('/dashboard', [PostController::class, 'index'])->name('home');
 Route::post('/add-post', [PostController::class, 'store'])->name('post.store');
