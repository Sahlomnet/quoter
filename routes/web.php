<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\SubgroupController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\QuoteController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // Route::resource('marcas', ManufacturerController::class);
    // Route::resource('grupos', GroupController::class);
    // Route::resource('subgrupos', SubgroupController::class);
    // Route::resource('productos', ProductController::class);
    // Route::resource('cotizaciones', QuoteController::class);

});

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::resource('marcas', ManufacturerController::class);
    Route::resource('grupos', GroupController::class);
    Route::resource('subgrupos', SubgroupController::class);
    Route::resource('productos', ProductController::class);
    Route::resource('clientes', ClientController::class);
    Route::resource('cotizaciones', QuoteController::class);

    // Endpoints AJAX que devuelven JSON
    Route::get('productos/get-grupos/{marca}', [ProductController::class, 'getGruposPorMarca'])
        ->name('admin.productos.get-grupos');

    Route::get('productos/get-subgrupos/{grupo}', [ProductController::class, 'getSubgruposPorGrupo'])
        ->name('admin.productos.get-subgrupos');
});

require __DIR__.'/auth.php';
