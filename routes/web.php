<?php

use App\Http\Controllers\TerrainContrller;
use Illuminate\Support\Facades\Route;

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
    return view('admin.dashboard');
});

Route::get('/terrain',[TerrainContrller::class,'index'])->name('terrain');
Route::get('/liste-terrain',[TerrainContrller::class,'liste'])->name('liste');
Route::post('/storeterrains',[TerrainContrller::class,'store'])->name('enregistrerTerrain');
Route::get('/update-terrain/{id}',[TerrainContrller::class,'updateterrain']);
Route::post('/updatestoreterrain',[TerrainContrller::class,'updatestoreterrain']);
Route::get('/delete-terrain/{id}',[TerrainContrller::class,'deleteterrain']);