<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
//home page
Route::get('/','HomeController@index');
//pack 
Route::get('/pack','HomeController@pack')->name('pack');

Route::get('/Qui-somme-nous', function () {
    return view('front_end/pages/aboutus');
});

Route::get('/contact', function () {
    return view('front_end/pages/contact');
})->name('contact');



Auth::routes();
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','UserManagement\RoleController');
  Route::resource('users','UserManagement\UserController');
  Route::get('dashboard','backend\DashboardController@index')->name('dashboard');
  Route::resource('packs', 'backend\PackController');
  Route::resource('showrooms', 'backend\ShowroomController');
  Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();
    return Redirect()->route('/');
})->name('logout');

});

