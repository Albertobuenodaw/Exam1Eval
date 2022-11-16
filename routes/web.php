<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PilotsController;
use App\Http\Controllers\TeamsController;

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
    return view('index');
});

Route::get('/pilot', [PilotsController::class , 'index'])->name('pilot-index');
Route::post('/pilot', [PilotsController::class , 'store'])->name('pilot-create');
Route::post('/team',[TeamsController::class, 'store'])->name('team-create');
Route::get('/team', [TeamsController::class, 'index'])->name('team-index');