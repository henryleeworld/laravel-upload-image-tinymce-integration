<?php

use App\Http\Controllers\TinyMCEController;
use Illuminate\Support\Facades\Route;

Route::get('tinymce', [TinyMCEController::class, 'index']);
Route::post('tinymce/upload', [TinyMCEController::class, 'upload'])->name('tinymce.upload');
