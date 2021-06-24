<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactUsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RendezController;

use function Ramsey\Uuid\v1;

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

//Home-----------------------------
Route::get('/', function () {
    return view('Home.home');
});

Route::get('/admin/profil/form',[AdminController::class,'profil_form']);



    //---- rendez vous

 Route::post('/store',[RendezController::class,'store']);




//-------------------------------------------








//home from event controller_____________
Route::get('/',[EventController::class,'home']);
//____________________________________________



//Admin_Events-CRUD-------------------------------------------------------
        //Route::get('/admin/event',[EventController::class,'index']);
Route::get('/admin/event/create',[EventController::class,'create']);
Route::post('/admin/event/store',[EventController::class,'store']);
Route::get('/admin/event/{id}/edit',[EventController::class,'edit']);
Route::put('/admin/event/{id}/update',[EventController::class,'update']);
Route::delete('/admin/event/{id}',[EventController::class,'destroy']);
//------------------------------------------------------------------



//profile donneur-CRUD --------------------------------------------------

Route::get('/profile',[ProfileController::class,'index']);
//Route::post('/profile/{id}/store',[ProfileController::class,'store']);


//Admin
Route::get('admin/dashboard',[AdminController::class,'index']);
Route::get('admin/stock',[AdminController::class,'index_stock']);
Route::get('admin/profiles',[AdminController::class,'index_profiles']);
Route::get('admin/users',[AdminController::class,'index_users']);
Route::post('admin/profil/store',[AdminController::class,'profil_store']);

//Contact us
Route::get('/contact', [ContactUsController::class, 'createForm']);

Route::post('/contact', [ContactUsController::class, 'ContactUsForm'])->name('contact.store');

//END_ADMIN_EVENTS------------------------------------------------------------------

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');






Route::get('/error',function(){
    return view('home.error');
});

//Mail
Route::get('sendbasicemail','MailController@basic_email');
Route::get('sendhtmlemail','MailController@html_email');
Route::get('sendattachmentemail','MailController@attachment_email');
