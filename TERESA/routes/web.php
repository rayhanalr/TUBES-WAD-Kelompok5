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
    return redirect(route("login"));
});

Auth::routes();

//user routes
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create', [App\Http\Controllers\HomeController::class, 'create'])->name('create');
Route::post('/create', [App\Http\Controllers\HomeController::class, 'store'])->name('store');
Route::get('/history', [App\Http\Controllers\HomeController::class, 'history'])->name('history');

//admin routes
Route::get('/show-pdf/{id}', function($id) {
    $file = \App\Models\Reservasi::where('file', $id)->first();
    return response()->file(public_path().'/data_file/'.$file->file);
})->name('show-pdf')->middleware('admin');

Route::get('/accept/{id}', [App\Http\Controllers\AdminController::class, 'accept'])->name('accept')->middleware('admin');
Route::get('/decline/{id}', [App\Http\Controllers\AdminController::class, 'decline'])->name('decline')->middleware('admin');
Route::get('/done/{id}', [App\Http\Controllers\AdminController::class, 'done'])->name('done')->middleware('admin');
Route::post('/tambah', [App\Http\Controllers\AdminController::class, 'tambah'])->name('tambah')->middleware('admin');
Route::get('/delete/{id}', [App\Http\Controllers\AdminController::class, 'delete'])->name('delete')->middleware('admin');