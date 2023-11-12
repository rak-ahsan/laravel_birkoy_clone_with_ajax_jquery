<?php

use App\Http\Controllers\admin;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\AlladsController;
use App\Http\Controllers\CatagoriesController;
use App\Http\Controllers\ProductViewController;
use App\Http\Controllers\ChatModelController;
use App\Http\Controllers\HomemodelController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ReportController;
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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::view('/', 'Frontend/content');

Route::controller(admin::class)->group(function () {

    Route::get('/main', 'index')->name('main');
});


// Route::controller(ProductController::class)->group(function () {

//     Route::get('/welcome', 'index')->name('rakib');
// });


Route::controller(HomemodelController::class)->group(function () {

    Route::get('/', 'index')->name('home');
    Route::get('/category/{cata_id}', 'cata')->name('username');
});


Route::middleware('auth')->controller(AlladsController::class)->group(function () {

    Route::get('/allads', 'index')->name('ads');
    Route::get('/post-add', 'adspost')->name('adspost');
    Route::post('/poststore', 'store')->name('adstore');
    Route::get('/adsview', 'view')->name('adsview');

    //member request
    Route::post('/memberequest', 'memberequest')->name('memberequest');
    Route::get('/memberdelete/{mem_id}', 'destroy')->name('memberdelete');

    // search
    Route::get('/search/{srting}', 'search')->name('search');

    //location
    Route::get('/location/{ads_loc}', 'location')->name('search');
});


Route::middleware('auth')->controller(ReportController::class)->group(function () {

    Route::post('/report', 'store')->name('report');
    Route::get('/reportedads', 'reportedads')->name('reportedads');
    Route::get('/reportup/{id}', 'reportup')->name('reportup');
    Route::put('/reportups/{id}', 'reportups')->name('reportups');
});


Route::middleware(['auth', 'role'])->controller(AlladsController::class)->group(function () {
    Route::get('/badsview', 'alladsview')->name('badsview');
    Route::get('/pendingads', 'pendingads')->name('pendingads');
    Route::get('/editads/{ads_id}', 'adsedit')->name('editads');
    Route::put('/upads/{ads_id}', 'bupdate')->name('upads');
});


Route::middleware('auth')->controller(ProductViewController::class)->group(function () {

    Route::get('/productview/{post}', 'index')->name('productview');
    // like
    Route::get('like/{id}', 'like')->name('like');
    Route::get('dlike/{id}', 'dlike')->name('dlike');

    // comment
    Route::get('comment/{id}', 'comment')->name('comment');
    Route::get('dcomment/{id}', 'dcomment')->name('dcomment');
});

Route::middleware('auth')->controller(UserProfileController::class)->group(function () {

    Route::get('/userprofile/{username}', 'index')->name('userprofile');
    // settings
    Route::get('/usersetting/ads', 'userads')->name('userads');
    Route::get('/edituserads/{ads_id}', 'useradsedit')->name('edituserads');
    Route::get('/usersetting', 'settings')->name('settings');

    // membership
    Route::get('/edit/{username}', 'getuser')->name('getuser');
    Route::put('/update/{username}', 'userupdate')->name('userupdate');
});


// backend


Route::middleware(['auth', 'role'])->controller(UserProfileController::class)->group(function () {
    Route::get('/alluser', 'alluser')->name('alluser');
    Route::get('/paiduser', 'paidmember')->name('paidmember');
    Route::get('/freeuser', 'freemember')->name('freemember');
    Route::get('/memberequest', 'pending')->name('memberequest');
    Route::get('/userdelete/{id}', 'destroy')->name('userdelete');
});



Route::middleware('auth')->controller(ChatModelController::class)->group(function () {

    Route::get('/chat', 'index')->name('chat');
    Route::post('/chat', 'store')->name('chatstore');
    Route::get('/message/{product_id}', 'loadmsg')->name('message');
});

Route::middleware(['auth', 'role'])->controller(CatagoriesController::class)->group(function () {

    Route::get('/categories', 'index')->name('category.index');
    Route::get('/category/create', 'create')->name('category.create');
    Route::post('/category', 'store')->name('category.store');
    Route::get('/category/{cata_id}/edit', 'show')->name('category.show');
    Route::post('/category/{cata_id}', 'update')->name('category.update');
    Route::get('/category/destroy/{cata_id}', 'destroy')->name('category.destroy');
});
require __DIR__ . '/auth.php';
