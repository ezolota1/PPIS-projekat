<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CovidDataController;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->get('/covid', [CovidDataController::class, 'index'])->name('covid.index');
Route::middleware('auth', 'role:lab')->get('/covid/create', [CovidDataController::class, 'create'])->name('covid.create');
Route::middleware('auth', 'role:lab')->post('/covid/store', [CovidDataController::class, 'store'])->name('covid.store');
Route::middleware('auth', 'role:lab')->get('/covid/edit/{id}', [CovidDataController::class, 'edit'])->name('covid.edit');
Route::middleware('auth', 'role:lab')->put('/covid/update/{id}', [CovidDataController::class, 'update'])->name('covid.update');
Route::middleware('auth', 'role:doc')->get('/covid/editFinalResult/{id}', [CovidDataController::class, 'editFinalResult'])->name('covid.editFinalResult');
Route::middleware('auth', 'role:doc')->put('/covid/updateFinalResult/{id}', [CovidDataController::class, 'updateFinalResult'])->name('covid.updateFinalResult');
Route::middleware('auth')->get('/covid', [CovidDataController::class, 'index'])->name('covid.index');
Route::middleware('auth')->get('/reset-password', [App\Http\Controllers\Auth\ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::middleware('auth')->post('/reset-password', [App\Http\Controllers\Auth\ResetPasswordController::class, 'resetPassword'])->name('password.update');

Route::post('/covid/{id}/pdf', [CovidDataController::class, 'generatePdf'])->name('covid.generatePdf');
Route::post('/covid/pdf', [CovidDataController::class, 'generatePdfGlobal'])->name('covid.generatePdfGlobal');
