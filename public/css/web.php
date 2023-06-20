<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\TenantController;

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
Route::resource('/areas', AreaController::class);
Route::resource('/managements', ManagementController::class);
Route::resource('/stores', StoreController::class);
Route::resource('/tenants', TenantController::class);
Route::get('/map', function () {
    return view('map');
});
