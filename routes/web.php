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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/invitados', [App\Http\Controllers\InvitadosController::class, 'index'])->name('invitados');
Route::get('/invitados-mater', [App\Http\Controllers\InvitadosController::class, 'indexMaster'])->name('invitados-mater');
Route::get('/gallery', [App\Http\Controllers\InvitadosController::class, 'gallery'])->name('gallery');

//rutas para el admin
Route::get('review', function () {   
    return view('review');
});



//rutas para acciones de imagenes
Route::get('image/upload',[App\Http\Controllers\ImageUploadController::class, 'fileCreate']);
Route::post('image/upload/store',[App\Http\Controllers\ImageUploadController::class, 'fileStore']);
Route::post('image/delete',[App\Http\Controllers\ImageUploadController::class, 'fileDestroy']);