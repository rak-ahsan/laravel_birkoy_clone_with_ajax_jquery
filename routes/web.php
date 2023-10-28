<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\AlladsController;
use App\Http\Controllers\CatagoriesController;
use App\Http\Controllers\ProductViewController;
use App\Http\Controllers\ChatModelController;
use App\Http\Controllers\HomemodelController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::view('/', 'Frontend/content');


Route::controller(ProductController::class)->group(function () {

    Route::get('/welcome', 'index')->name('rakib');
});


Route::controller(HomemodelController::class)->group(function () {

    Route::get('/', 'index')->name('home');
    Route::get('/category/{username}', 'cata')->name('username');
});


Route::middleware('auth')->controller(AlladsController::class)->group(function () {

    Route::get('/allads', 'index')->name('ads');
    Route::get('/post-add', 'adspost')->name('adspost');
    Route::post('/poststore', 'store')->name('adstore');
});

Route::controller(ProductViewController::class)->group(function () {

    Route::get('/productview', 'index')->name('productview');
});

Route::controller(UserProfileController::class)->group(function () {

    Route::get('/userprofile', 'index')->name('userprofile');
});

Route::controller(ChatModelController::class)->group(function () {

    Route::get('/chat', 'index')->name('chat');
});

Route::controller(CatagoriesController::class)->group(function () {

    Route::get('/categories', 'index')->name('category.index');
    Route::get('/category/create', 'create')->name('category.create');
    Route::post('/category', 'store')->name('category.store');
    Route::get('/category/{cata_id}/edit', 'show')->name('category.show');
    Route::post('/category/{cata_id}', 'update')->name('category.update');
    Route::get('/category/destroy/{cata_id}', 'destroy')->name('category.destroy');
});
require __DIR__ . '/auth.php';
