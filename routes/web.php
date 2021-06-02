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
Route::get('/register', function () {return view('regstr_authn/registration');});
Route::get('/sign', function () {return view('sign/sign');});
Route::get('/reg_doer', function () {return view('regstr_authn/registrationDoer/registration');});
Route::get('/reg_listener', function () {return view('regstr_authn/registrationListener/registration');});
Route::get('/sign_doer', function () {return view('sign/signDoer/sign');});
Route::get('/sign_listener', function () {return view('sign/signListener/sign');});
Route::get('/profile_doer', function () {return view('home/home_doer');});

Route::get('/home', function () {return view('home/home');});

// Route::get('/', function () {
//     return view('regstr_authn/registration_authentification');
// });
// Route::get('/', function () {
//     return view('regstr_authn/registration_authentification');
// });
// Route::get('/', function () {
//     return view('regstr_authn/registration_authentification');
// });
// Route::get('/', function () {
//     return view('regstr_authn/registration_authentification');
// });
// Route::get('/', function () {
//     return view('regstr_authn/registration_authentification');
// });
// Route::get('/', function () {
//     return view('regstr_authn/registration_authentification');
// });
// Route::get('/', function () {
//     return view('regstr_authn/registration_authentification');
// });
// Route::get('/', function () {
//     return view('regstr_authn/registration_authentification');
// });

