<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DaysController;

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

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Auth::routes();

Route::resource('brands', App\Http\Controllers\BrandController::class);
Route::resource('categories', App\Http\Controllers\CategoryController::class);
Route::resource('conditions', App\Http\Controllers\ConditionController::class);
Route::resource('favorites', App\Http\Controllers\FavoriteController::class);
Route::resource('histories', App\Http\Controllers\HistoryController::class);
Route::resource('items', App\Http\Controllers\ItemController::class);
Route::resource('laundries', App\Http\Controllers\LaundryController::class);
Route::resource('logs', App\Http\Controllers\LogController::class);
Route::resource('materials', App\Http\Controllers\MaterialController::class);
Route::resource('occassions', App\Http\Controllers\OccassionController::class);
Route::resource('outfits', App\Http\Controllers\OutfitController::class);
Route::resource('permissions', App\Http\Controllers\PermissionController::class);
Route::resource('roles', App\Http\Controllers\RoleController::class);
Route::resource('purchases', App\Http\Controllers\PurchaseController::class);
Route::resource('sizes', App\Http\Controllers\SizeController::class);
Route::resource('tags', App\Http\Controllers\TagController::class);
Route::resource('users', UserController::class);
Route::resource('days', App\Http\Controllers\daysController::class);
Route::get('monday', [DaysController::class, 'monday']);
Route::get('tuesday', [DaysController::class, 'tuesday']);
Route::get('wednesday', [DaysController::class, 'wednesday']);
Route::get('thursday', [DaysController::class, 'thursday']);
Route::get('friday', [DaysController::class, 'friday']);
Route::get('saturday', [DaysController::class, 'saturday']);
Route::get('sunday', [DaysController::class, 'sunday']);

