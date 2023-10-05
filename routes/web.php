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
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
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
    
    Route::middleware(['user.lang', 'cors'])->group(function () {
        // ARTICLES
        Route::controller(Articles::class)->group(function () {
            Route::prefix('news')->group(function () {
                Route::get('/', 'index');
                Route::get('/read/{slug}', 'read')->name('bulletin.read');
            });
        });
    
        // GALLERY
        Route::controller(Gallery::class)->group(function () {
            Route::prefix('gallery')->group(function () {
                Route::get('/', 'index')->name('gallery.album');
                Route::get('/get-album-content/{idAlbum}', 'getAlbumContent')->name('get.album.content');
                Route::get('get-album-content-items/{idAlbum}', 'getAlbumContentItems');
            });
        });
    
        // SOFIFI
        Route::controller(PageController::class)->group(function () {
            Route::get('/{slug?}', 'pageView');
        });
    
    });
    
});


// ADMIN
Route::prefix('admin')->group(function() {
    Route::controller(Admin::class)->group(function () {
        // LOGIN
        Route::get('/login', 'getLogin')->name('admin.login');
        Route::post('/login', 'cekLogin')->name('cek-login');
        Route::get('/logout', 'logout')->name('admin.logout');

    });
});

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::controller(PageController::class)->group(function () {
        Route::get('/post', function() {
            return view('admin/postpage');
        });
        Route::post('/post-page', 'store')->name('postpage');
    });

    Route::controller(Admin::class)->group(function () {
        Route::get('/', 'index');
        Route::get('/sofifi', 'index')->name('admin.sofifi');
        Route::get('/add-page', 'getAddPage')->name('add-page');
        Route::get('/edit-page/{slug}/{lang?}', 'getEditPage')->name('edit-page');
        Route::get('/generate-page/{slug}/{lang_id}', 'generateNewPage')->name('generateNewPage');
        Route::post('/post-add-page', 'create_page')->name('post-add-page');
        
        // USERS
        Route::prefix('account')->group( function() {
            Route::get('/manage', 'managedAccount')->name('admin.managed-acount');
            Route::post('/update-account', 'updateAccount')->name('admin.update-account');
        });

        // BUlletin
        Route::prefix('bulletin')->group(function() {
            Route::get('/', 'getBulletins')->name('admin.bulletin');
            Route::get('/add-page', 'addBulletin')->name('add-bulletin');
            Route::get('/edit/{id}', 'editBulletin')->name('bulletin.edit');
            Route::post('/update-page', 'updateBulletin')->name('admin.update-bulletin');
            Route::post('/save-page', 'saveBulletin')->name('admin.create-bulletin');
            Route::get('/delete/{id}', 'deleteBulletin')->name('admin.delete-bulletin');
        });

        // Gallery
        Route::prefix('gallery')->group(function() {
            Route::get('/', 'getGalleries')->name('admin.gallery');
            Route::post('/create-album', 'createAlbum')->name('admin.create-album');
            Route::get('/album/{id}', 'getGalleryCollections')->name('admin.get-album');
            Route::post('/add-photos-to-album', 'addPhotoToAlbum' )->name('admin.add-photo-to-album');
        });

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
