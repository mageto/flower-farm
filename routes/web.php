<?php

use Illuminate\Support\Facades\Route;
use App\Models\Flower;
use Illuminate\Support\Facades\Redirect;

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

Route::GET('/', function () {
    $flowers = Flower::with('flowerType')->limit(6)->get();
    return view('index', compact('flowers'));
});

Auth::routes();

Route::GET('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');

Route::GET('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::GET('/flower', [App\Http\Controllers\FlowersController::class, 'index'])->name('flowers');
Route::GET('/flower-types', [App\Http\Controllers\FlowerTypesController::class, 'index'])->name('flower-types');
Route::GET('/add-flower', [App\Http\Controllers\FlowersController::class, 'add_flower'])->name('add-flower');
Route::POST('/store-flower', [App\Http\Controllers\FlowersController::class, 'store'])->name('store-flower');
Route::GET('/add-flower-type', [App\Http\Controllers\FlowerTypesController::class, 'add_flower_type'])->name('add-flower-type');
Route::POST('/store-flower-type', [App\Http\Controllers\FlowerTypesController::class, 'store'])->name('store-flower-type');
Route::GET('/edit-flower-type/{id}', [App\Http\Controllers\FlowerTypesController::class, 'edit']);
Route::GET('/destroy-flower-type', [App\Http\Controllers\FlowerTypesController::class, 'destroy'])->name('destroy-flower-type');
Route::GET('/edit-flower/{id}', [App\Http\Controllers\FlowersController::class, 'edit']);
Route::GET('/destroy-flower', [App\Http\Controllers\FlowersController::class, 'destroy'])->name('destroy-flower');
Route::PUT('/update-flower/{id}', [App\Http\Controllers\FlowersController::class, 'update'])->name('update-flower');
Route::PUT('/update-flower-type/{id}', [App\Http\Controllers\FlowerTypesController::class, 'update'])->name('update-flower-type');
Route::GET('/flower-farm/{id}', [App\Http\Controllers\FlowerFarmController::class, 'flower']);
Route::POST('/search-flower', [App\Http\Controllers\FlowerFarmController::class, 'search_flower'])->name('search-flower');
Route::GET('/flowers', [App\Http\Controllers\FlowerFarmController::class, 'flowers'])->name('flowers');
Route::GET('/contacts', [App\Http\Controllers\ContactController::class, 'index'])->name('contacts');
Route::POST('/contact', [App\Http\Controllers\ContactController::class, 'contact'])->name('contact');
