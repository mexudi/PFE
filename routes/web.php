<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;

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



//home from event controller_____________
Route::get('/',[EventController::class,'home']);
//____________________________________________



//Admin_Events-CRUD-------------------------------------------------------
Route::get('/admin/event',[EventController::class,'index']);
Route::get('/admin/event/create',[EventController::class,'create']);
Route::post('/admin/event/store',[EventController::class,'store']);
Route::get('/admin/event/{id}/edit',[EventController::class,'edit']);
Route::put('/admin/event/{id}/update',[EventController::class,'update']);
Route::delete('/admin/event/{id}',[EventController::class,'destroy']);

//profile donneur-CRUD --------------------------------------------------
Route::get('/profile',[ProfileController::class,'index'])->middleware('auth');
Route::get('/profile',[ProfileController::class,'create']);
Route::post('/profile', [ProfileController::class,'store']);





//END_ADMIN_EVENTS------------------------------------------------------------------

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
