<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages as PageController;

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
    Route::controller(PageController::class)->group(function () {
        Route::get('/{slug?}', 'pageView');
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
});
