<?php

use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


// Front End
Route::get('/', function () {
    return view('frontend.index');
})->name('index');
Route::get('/our-recipies', function () {
    return view('frontend.recipies');
})->name('recipies');
Route::get('/all-packages', function () {
    return view('frontend.packages');
})->name('packages');
Route::get('/blog', function () {
    return view('frontend.blog');
})->name('blog');
Route::get('/blog-detail', function () {
    return view('frontend.blog-detail');
})->name('blog-detail');
Route::get('/about-us', function () {
    return view('frontend.about-us');
})->name('about-us');
Route::get('/details', function () {
    return view('frontend.details');
})->name('details');


