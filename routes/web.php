<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PhotoController;

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

// percobaan 1
// Route::get('/hello', function () {
//     return 'Hello World';
// });

Route::get('/world', function () {
    return 'World';
});

// Percobaan 2
Route::get('/user/{name}', function ($name) {
    return 'Nama saya ' . $name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});

//Percobaan 3
Route::get('/user/{name?}', function ($name = null) {
    return 'Nama saya ' . $name;
});

// Percobaan 4 
Route::get('/hello', [WelcomeController::class, 'hello']);

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/about', [WelcomeController::class, 'about']);

Route::get('/articles/{id}', [WelcomeController::class, 'articles']);

// Perobaan 5
Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);
Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);

// Percobaan 6 & 7
// Route::get('/greeting', function() {
//     return view('blog.hello', ['name' => 'Fiqlal'], []);
// });

   
// Percobaan 8
Route::get('/greeting', [WelcomeController::class, 'greeting']);