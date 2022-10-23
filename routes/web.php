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
Route::get('/','HomeController@index')->name('/');
//pack 
Route::get('/pack','HomeController@pack')->name('pack');
Route::get('{id}/produits','HomeController@productwithcategory')->name('productwithcategory');
Route::get('showroom-tunimeuble','HomeController@showrooms')->name('showroomstuni');
Route::get('{id}/liste-showroom-tunimeuble','HomeController@listeshowrooms')->name('listeshowrooms');
Route::get('{id}/showroom-meuble','HomeController@singlehowrooms')->name('singleshowroomstuni');
Route::get('{id}/produit-meuble','HomeController@singleproduct')->name('singleproduct');
Route::get('/search', 'HomeController@search')->name('search');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::post('contact/send', 'HomeController@send')->name('contact.send');


//register
Route::get('/register', 'Auth\LoginController@create')->name('register');
Route::post('register', 'Auth\LoginController@store')->name('registeruser');
Route::get('login', 'Auth\LoginController@viewlogin')->name('login');
Route::post('registerlogin', 'Auth\LoginController@login')->name('registerlogin');
Route::get('/Qui-somme-nous', function () {
  return view('front_end/pages/aboutus');
});

Route::group(['middleware' => ['auth']], function() {
  Route::get('dashboard','backend\DashboardController@index')->name('dashboard');
    Route::get('logout', function ()
  {    auth()->logout();
      Session()->flush();
      return Redirect()->route('/');
  })->name('logout');
});

//** for admin user */
Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function() {
  Route::get('dashboard','backend\DashboardController@index')->name('dashboard');
  Route::resource('users','UserManagement\UserController');
  Route::resource('categories', 'backend\CategoryController');
  Route::resource('roles','UserManagement\RoleController');
  Route::post('pack/register','UserManagement\UserController@registerpack')->name('registerpack');
  Route::resource('packs', 'backend\PackController');
  Route::resource('souscategory', 'backend\SouscategoryController');
});


//*** for user auth */
Route::group(['prefix' => 'admin', 'middleware' => ['role:user']], function() {
  Route::get('dashboard','backend\DashboardController@index')->name('dashboard');
  Route::resource('showrooms', 'backend\ShowroomController');
  Route::resource('products', 'backend\ProductController');
});