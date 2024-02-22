<?php

use App\Http\Controllers\TinyMCEController;
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
Route::get('tinymce', [TinyMCEController::class, 'index']);
Route::post('tinymce/upload', [TinyMCEController::class, 'upload'])->name('tinymce.upload');
