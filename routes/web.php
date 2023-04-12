<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PropertyController;
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

Route::get('/home',[PagesController::class,'home']);
Route::get('/', [PagesController::class,'home']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    Route::get('/profile',[PagesController::class,'profile']);
});
// Route::middleware('checkstatus',function (){})
// Route::get('/dash',[PagesController::class,'dash'])->middleware('checkstatus');
// Route::resource('/properties',PropertyController::class)->only('index','show');
Route::get('/property', [PagesController::class, 'index']);
Route::post('/search', [PagesController::class,'search']);
Route::middleware('checkstatus')->group(function () {
    Route::resource('/properties',PropertyController::class);
    Route::get('/dash', [PagesController::class, 'dash']);
});
