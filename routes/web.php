<?php

use App\Http\Controllers\DemoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/bakeryform', function () {
//     return view('bakeryform');
// });

// Route::post('/bakeryform', [FormController::class, 'submit']);

// Route::get('/table', [FormController::class, 'table']);

// Route::get('/edit/{id}', function ($id) {
//     return view('edit', ['id' => $id]);
// })->name('editpage');

// Route::post('/delete/{id}', function ($id) {
//     return "Record with ID $id deleted successfully!";
// })->name('deletepage');

Route::get('/table', [DemoController::class, 'index'])->name('tablepage');

Route::get('/bakeryform', [DemoController::class, 'create'])->name('bakeryformpage');

Route::post('/bakeryform', [DemoController::class,'store'])->name('bakerybutton');

Route::get('/displayinfo/{id}',[DemoController::class,'show'])->name('displaypage');

Route::get('/edit/{id}',[DemoController::class,'edit'])->name('editpage');
