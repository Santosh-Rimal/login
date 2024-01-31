<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
Route::get('/', [FirstController::class,'first']);
// Route::get('/welcome', 'welcome')->middleware('route');
Route::get('/welcome',function(){
    return view('welcome');
})->middleware('route');


Route::get('/logins', [LoginController::class,'create'])->name('logins.create');
Route::post('/logins', [LoginController::class,'store'])->name('logins.store');


Route::get('/registers', [RegisterController::class,'create'])->name('registers.create');
Route::post('/registers', [RegisterController::class,'store'])->name('registers.post');