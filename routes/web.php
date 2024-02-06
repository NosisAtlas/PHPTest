<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemoignageController;

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

// Route::get('/', function(){
//     return redirect('/temoignages');
// });
Route::get('/', [TemoignageController::class, 'index'])->name('temoignage.index');
Route::post('/temoignages/store', [TemoignageController::class, 'store'])->name('temoignage.store');

// Handling the testimonials list
Route::post('/approve-testimonial/{id}', [TemoignageController::class, 'approve'])->name('temoignage.approve');
Route::post('/reject-testimonial/{id}', [TemoignageController::class, 'reject'])->name('temoignage.reject');
Route::delete('/delete-testimonial/{id}', [TemoignageController::class, 'destroy'])->name('temoignage.destroy');

