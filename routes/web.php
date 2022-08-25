<?php

use App\Http\Controllers\Admin\ProgramController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('data', [DataController::class, 'index']);

Auth::routes();

Route::middleware('role:user')->group(function () {
    Route::get('dashboard', [HomeController::class, 'index'])->name('home');
});

Route::middleware('role:admin')->name('admin.')->prefix('admin')->group(function() {
    Route::get('admin', [AdminController::class, 'index'])->name('index');
    Route::resource('program', ProgramController::class);
});
