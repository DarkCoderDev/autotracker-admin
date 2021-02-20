<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{MainController, ProductController, HomeController};

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

Route::get('/', [MainController::class, 'index'])->name('main');
Route::get('/about', function() {
	return view('about');
})->name('about');

Route::post('/', [MainController::class, 'store'])->name('create');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/services', [MainController::class, 'getProducts'])->name('services');

Route::middleware('auth')->prefix('home')->name('admin.')->group(function() {
	Route::resource('product', ProductController::class);
	Route::get('info', [HomeController::class, 'getInfo'])->name('info');
	Route::delete('info/{id}', [HomeController::class, 'destroy'])->name('info.destroy');
});


Auth::routes();

