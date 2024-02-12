<?php

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AssocieéController;
use App\Http\Controllers\GerantController;
use App\Http\Controllers\SocieteController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\DamancomController;
use App\Http\Controllers\ImpotController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegusController;
use App\Http\Controllers\CimrController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\PlusController;
;
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



Route::get('/',[HomeController::class,'Home'])->name('home');
Route::get('/Login',[HomeController::class,'Login'])->name('Login');
Route::get('/SignUp',[HomeController::class,'SignUp'])->name('SignUp');
Route::post('/SignUpRequest',[HomeController::class,'SignUpRequest'])->name('SignUpRequest');
Route::post('/LoginRequest',[HomeController::class,'loginRequest'])->name('LoginRequest');
Route::get('/About',[HomeController::class,'About'])->name('About');
Route::get('/contact', [ContactController::class, 'index'])->name('mails.contact_mail');
Route::post('/contact/send', [ContactController::class, 'send'])->name('mails.send');
Route::get('/Voir', function () {
	return view('Voir-plus');
})->name('Voir');
// routes/web.php


Route::group(['middleware' => 'auth'], function () {
	Route::get('/sections', [SectionController::class, 'index'])->name('sections.index');
Route::post('/sections', [SectionController::class, 'store'])->name('sections.store');

	Route::get('dashboard', function () {return view('dashboard');
})->name('dashboard');
	

Route::post('/dynamic-table/store', 'PlusController@store')->name('dynamic-table.store');

  Route::get('/cimrs', [CimrController::class, 'index'])->name('cimrs.index');
  Route::get('/cimrs/create', [CimrController::class, 'create'])->name('cimrs.create');
  
  Route::post('/cimrs', [CimrController::class, 'store'])->name('cimrs.store');
  Route::get('/cimrs/edit/{id}', [CimrController::class, 'edit'])->name('cimrs.edit');
  Route::put('/cimrs/update/{id}', [CimrController::class, 'update'])->name('cimrs.update');
  Route::delete('/cimrs/destroy/{id}', [CimrController::class, 'destroy'])->name('cimrs.destroy');
  Route::get('/cimrs/show/{id}', [CimrController::class, 'show'])->name('cimrs.show');
  Route::get('/cimrs/search', [CimrController::class, 'search'])->name('cimrs.search');
  Route::get('/societes', [SocieteController::class, 'index'])->name('societes.index');
Route::get('/societes/create', [SocieteController::class, 'create'])->name('societes.create');
Route::post('/societes', [SocieteController::class, 'store'])->name('societes.store');
Route::get('/profile', [UserController::class, 'profile'])->name('profile');

Route::put('/profile/update/{id}', [UserController::class, 'profile2'])->name('users.profile2');
Route::get('profile/edit/{id}', [UserController::class, 'profile1'])->name('users.profile1');

Route::get('/societes/edit/{id}', [SocieteController::class, 'edit'])->name('societes.edit');
Route::put('/societes/update/{id}', [SocieteController::class, 'update'])->name('societes.update');
Route::delete('/societes/destroy/{id}', [SocieteController::class, 'destroy'])->name('societes.destroy');
Route::get('/societes/show/{id}', [SocieteController::class, 'show'])->name('societes.show');
Route::get('/societes/search', [SocieteController::class, 'search'])->name('societes.search');
Route::get('/societes/{societe_id}/details', [SocieteController::class, 'showDetails'])->name('societes.details');
Route::get('/societes/{societe_id}/Associes', [SocieteController::class, 'showDetails'])->name('associes.details');
Route::get('/societes/{societe_id}/Gerants', [SocieteController::class, 'details'])->name('societes.details1');


Route::get('/regus', [RegusController::class, 'index'])->name('regus.index');
Route::get('/regus/create', [RegusController::class, 'create'])->name('regus.create');

Route::post('/regus', [RegusController::class, 'store'])->name('regus.store');
Route::get('/regus/edit/{id}', [RegusController::class, 'edit'])->name('regus.edit');
Route::put('/regus/update/{id}', [RegusController::class, 'update'])->name('regus.update');
Route::delete('/regus/destroy/{id}', [RegusController::class, 'destroy'])->name('regus.destroy');
Route::get('/regus/show/{id}', [RegusController::class, 'show'])->name('regus.show');
Route::get('/regus/search', [RegusController::class, 'search'])->name('regus.search');
//pour le gérants
Route::get('/gerants', [GerantController::class, 'index'])->name('gerants.index');
Route::get('/gerants/create', [GerantController::class, 'create'])->name('gerants.create');
Route::post('/gerants', [GerantController::class, 'store'])->name('gerants.store');
Route::get('/gerants/show/{id}', [GerantController::class, 'show'])->name('gerants.show');

Route::get('/gerants/edit/{id}', [GerantController::class, 'edit'])->name('gerants.edit');
Route::put('/gerants/update/{id}', [GerantController::class, 'update'])->name('gerants.update');
Route::delete('/gerants/destroy/{id}', [GerantController::class, 'destroy'])->name('gerants.destroy');
Route::get('/gerants/search', [GerantController::class, 'search'])->name('gerants.search');
//pour les associes
Route::get('/associes', [AssocieéController::class, 'index'])->name('associes.index');
Route::get('/associes/create', [AssocieéController::class, 'create'])->name('associes.create');
Route::post('/associes', [AssocieéController::class, 'store'])->name('associes.store');
Route::get('/associes/edit/{id}', [AssocieéController::class, 'edit'])->name('associes.edit');
Route::get('/associes/show/{id}', [AssocieéController::class, 'show'])->name('associes.show');

Route::put('/associes/update/{id}', [AssocieéController::class, 'update'])->name('associes.update');
Route::delete('/associes/destroy/{id}', [AssocieéController::class, 'destroy'])->name('associes.destroy');
Route::get('/associes/search', [AssocieéController::class, 'search'])->name('associes.search');

//damancom

    
Route::get('/damancoms', [DamancomController::class, 'index'])->name('damancoms.index');
Route::get('/damancoms/create', [DamancomController::class, 'create'])->name('damancoms.create');

Route::post('/damancoms', [DamancomController::class, 'store'])->name('damancoms.store');
Route::get('/damancoms/edit/{id}', [DamancomController::class, 'edit'])->name('damancoms.edit');
Route::put('/damancoms/update/{id}', [DamancomController::class, 'update'])->name('damancoms.update');
Route::delete('/damancoms/destroy/{id}', [DamancomController::class, 'destroy'])->name('damancoms.destroy');
Route::get('/damancoms/show/{id}', [DamancomController::class, 'show'])->name('damancoms.show');
Route::get('/damancoms/search', [DamancomController::class, 'search'])->name('damancoms.search');
Route::get('/impots', [ImpotController::class, 'index'])->name('impots.index');
Route::get('/impots/create', [ImpotController::class, 'create'])->name('impots.create');

Route::post('/impots', [ImpotController::class, 'store'])->name('impots.store');
Route::get('/impots/edit/{id}', [ImpotController::class, 'edit'])->name('impots.edit');
Route::put('/impots/update/{id}', [ImpotController::class, 'update'])->name('impots.update');
Route::delete('/impots/destroy/{id}', [ImpotController::class, 'destroy'])->name('impots.destroy');
Route::get('/impots/show/{id}', [ImpotController::class, 'show'])->name('impots.show');
Route::get('/impots/search', [ImpotController::class, 'search'])->name('impots.search');
	

	Route::get('/register', function () {
		return view('register');
	})->name('/register');
	Route::get('admin-dashboard', function () {
		return view('admin-dashboard');
	})->name('admin-dashboard');


	// routes/web.php
	Route::get('rtl', function () {
		return view('rtl');
	})->name('rtl');
});
Route::get('/contact', function () {
		return view('mails/contact_mail');
	})->name('contact');
	Route::get('/test', function () {
		return view('test');
	})->name('test');
	Route::get('user-management', function () {
		return view('laravel-examples/user-management');
	})->name('user-management');
	Route::get('Users', function () {
		return view('laravel-examples/Users');
	})->name('Users');
	Route::get('Gérants', function () {
		return view('laravel-examples/Gérants');
	})->name('Gérants');
	Route::get('Associéte', function () {
		return view('laravel-examples/Associéte');
	})->name('Associéte');
    Route::get('/logout', [HomeController::class, 'logout']);
	Route::get('/user-profile', [InfoUserController::class, 'create']);
	Route::post('/user-profile', [InfoUserController::class, 'store']);

   /* Route::get('/login', function () {
		return view('session/login-session');
	})->name('sign-up');
});

*/

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);
 //   Route::get('/login', [SessionsController::class, 'create']);
    Route::post('/session', [SessionsController::class, 'store']);

	Route::get('/login/forgot-password', [ResetController::class, 'create']);
	Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
	Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
	Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');

});

Route::get('/Login', function () {
    return view('login');
})->name('login');

//pour les users
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create1', [UserController::class, 'create1'])->name('users.create1');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/update/{id}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/delete/{id}', [UserController::class, 'destroy'])->name('users.destroy');
Route::get('/users/search', [UserController::class, 'search'])->name('users.search');



//pour societe


//impots

Route::get('/nav', [NotificationController::class, 'index'])->name('test');



Route::get('/contact', [ContactController::class, 'index'])->name('mails.contact_mail');
Route::post('/contact/send', [ContactController::class, 'send'])->name('mails.send');

Route::get('/generatepdf', [SocieteController::class, 'generatepdf'])->name('societes.pdf');
  //CIMR

