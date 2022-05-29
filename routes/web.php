<?php

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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
    Route::resource('customers', App\Http\Controllers\Modules\CustomerController::class);
    Route::group(['prefix' => 'sellers'], function () {
        Route::get('export', [App\Http\Controllers\Modules\SellerController::class, 'export'])->name('sellers.export');
    });
    Route::resource('sellers', App\Http\Controllers\Modules\SellerController::class);
    Route::resource('vehicles', App\Http\Controllers\Modules\VehicleController::class);
    Route::resource('sales', App\Http\Controllers\Modules\SaleController::class);

});