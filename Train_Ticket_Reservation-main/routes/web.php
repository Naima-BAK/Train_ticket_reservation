<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Redirect;

use App\Http\Controllers\PlaceController;
use App\Http\Controllers\TrainController;

use App\Http\Controllers\VilleController;
use App\Http\Controllers\VoyageController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\VoitureController;
use App\Http\Controllers\CategorieController;
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












// -------------------------

Route::get('/about', function () {
    return view('about');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/listusers', function () {
    return view('admin.listUsers');
});

Route::get('/listReservations', function () {
    return view('admin.listReservation');
});
// -------------------------




// -----------------------
Route::get('/', function () {
    return view('home');
});
Route::get('/profile', function () {
    return view('profile',[Auth::user()]);
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("/contactx",[ContactController::class,'index']);
//Route::get("/home",[ContactController::class,'create']);
Route::get("/contact",[ContactController::class,'store']);



// ------------------------
route::resource('Voyage/reservationChoisi','ReservationController');

Route::get('Voyage/reservationChoisi','ReservationController@index');

Route::post('reserve',[App\Http\Controllers\ReservationController::class,'store']);

Route::post('acheter',[App\Http\Controllers\AvantPaimentController::class,'store']);

// -----------------------

route::resource('/Voyage/billet','BilletController');
 Route::get('billet',[App\Http\Controllers\BilletController::class,'store']);


route::get('test' ,function(){
    return view('test');
});
route::resource('/Voyage/telecharger','PdfController');
 Route::get('telecharger',[App\Http\Controllers\PdfController::class,'store']);


// -------------------Contact---------------------------
route::get('/contact',function(){
    return view('contact');
});
route::resource('contactx','ContactController');

// ------------------------------------------------
//resultat de recherche d'un voyage page home :
Route::get('Voyage/resultatSearch','VoyageController@search');



//---------Admin routes ---------------------
Route::get('adminLogin', [App\Http\Controllers\Admin\LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('adminLogin', [App\Http\Controllers\Admin\LoginController::class, 'login']);
Route::get('/admin/admin', [App\Http\Controllers\AdminController::class, 'index']);


//--------------------------------------------
//--------- first page ---------------------------
// Route::get('/admin', function () {
//     return view('admin.admin');
// });
  

//gestion train :
route::resource('/admin/GestionTrain','TrainController');
Route::get("/listTrain",[TrainController::class,'index']);

//gestion categorie:
route::resource('/admin/GestionCategorie','CategorieController');
Route::get("/listCategorie",[CategorieController::class,'index']);


//gestion voitures :
route::resource('/admin/GestionVoiture','VoitureController');
Route::get("/listVoiture",[VoitureController::class,'index']);

//gestion places :
route::resource('/admin/GestionPlace','PlaceController');
Route::get("/listPlace",[PlaceController::class,'index']);


//gestion places :
route::resource('/admin/GestionVilles','VilleController');
Route::get("/listVille",[VilleController::class,'index']);

//gestion voyages :
route::resource('/admin/GestionVoyage','VoyageController');
Route::get("/listVoyage",[VoyageController::class,'index']);

