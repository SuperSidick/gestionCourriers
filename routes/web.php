<?php

use App\Receved;
use App\Sent;
use App\Visit;
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
    $send = Sent::all();
    $visits = Visit::all();
    $receved = Receved::all();
    // flash()->overlay('Bienvenue sur votre appli de gestion de courrier', 'OK');
    return view('user.home', compact('receved','send','visits'));
})->name('home')->middleware('auth');

Route::resource('sent', 'SentController')->middleware('auth');
Route::resource('receved', 'RecevedController')->middleware('auth');
Route::resource('visits', 'VisitsController')->middleware('auth');
Route::post('sentSearch', 'SearchsController@sentSearch')->name('sentSearch');
Route::post('recevedSearch', 'SearchsController@recevedSearch')->name('recevedSearch');
Route::post('visitSearch', 'SearchsController@visitSearch')->name('visitSearch');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
