<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages as PageController;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Articles;
use App\Http\Controllers\Gallery;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::group(['prefix' => 'laravel-filemanager'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::prefix('pages')->group(function () {
    
    Route::get('cek-session', function() {
        dd(session()->get('_language'));
    });
    
    Route::get('del-session', function() {
        dd(session()->all());
    });
    
    Route::get('set-lang/{lang?}', function ($lang = 'id') {
        session(['_language' => $lang]);
        return redirect()->back();
    });
    
    Route::middleware(['user.lang'])->group(function () {
        // ARTICLES
        Route::controller(Articles::class)->group(function () {
            Route::prefix('news')->group(function () {
                Route::get('/', 'index');
                Route::get('/read/{slug}', 'read')->name('bulletin.read');
            });
        });
    
        // GALLERY
        Route::controller(Gallery::class)->group(function () {
            Route::get('/gallery', 'index');
        });
    
        // SOFIFI
        Route::controller(PageController::class)->group(function () {
            Route::get('/{slug?}', 'pageView');
        });
    
    });
    
});



// ADMIN
Route::prefix('admin')->group(function () {
    Route::controller(PageController::class)->group(function () {
        Route::get('/post', function() {
            return view('admin/postpage');
        });
        Route::post('/post-page', 'store')->name('postpage');
    });

    Route::controller(Admin::class)->group(function () {
        Route::get('/', 'index');
        Route::get('/sofifi', 'index')->name('admin.sofifi');
        Route::get('/login', 'getLogin');
        Route::get('/add-page', 'getAddPage')->name('add-page');
        Route::get('/edit-page/{slug}/{lang?}', 'getEditPage')->name('edit-page');
        Route::get('/generate-page/{slug}/{lang_id}', 'generateNewPage')->name('generateNewPage');
        Route::post('/post-add-page', 'postAddPage')->name('post-add-page');


        // BUlletin
        Route::prefix('bulletin')->group(function() {
            Route::get('/', 'getBulletins')->name('admin.bulletin');
            Route::get('/add-page', 'addBulletin')->name('add-bulletin');
        });

        // Gallery
        Route::get('/gallery', 'getGalleries')->name('admin.gallery');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
