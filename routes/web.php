<?php

use App\Http\Controllers\CollectorController;
use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, 'home'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('collectors', CollectorController::class);
    Route::get('/collectors/{collector}/delete', [CollectorController::class, 'delete'])
        ->name('collectors.delete');
});
require __DIR__ . '/auth.php';
