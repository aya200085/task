<?php


use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\CountryChangeStatus;
use App\Http\Controllers\Admin\countryController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('countrys',countryController::class);
    Route::resource('states',StateController::class);
    Route::resource('cities',CityController::class);
    Route::get('/change-country-status/{id}', [CountryChangeStatus::class, 'changeStatus']);
    Route::get('/change-state-status/{id}', [StateController::class, 'changeStatus']);

});













require __DIR__.'/auth.php';
