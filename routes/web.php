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
Route::get('{id}/produits-meuble','HomeController@productwithsubcategory')->name('productwithsubcategory');
Route::get('showroom-tunimeuble','HomeController@showrooms')->name('showroomstuni');
Route::get('{id}/liste-showroom-tunimeuble','HomeController@listeshowrooms')->name('listeshowrooms');
Route::get('{id}/showroom-meuble','HomeController@singlehowrooms')->name('singleshowroomstuni');
Route::get('{id}/produit-meuble','HomeController@singleproduct')->name('singleproduct');
Route::get('{id}/produit-showroom','HomeController@productsshowroom')->name('productsshowroom');
Route::get('/search', 'HomeController@search')->name('search');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::post('contact/send', 'HomeController@send')->name('contact.send');
Route::get('comment-ça-marche', 'HomeController@comment')->name('Comment');
Route::get('apropos', 'HomeController@apropos')->name('apropos');
Route::get('fqa', 'HomeController@fqa')->name('fqa');
Route::get('actualite', 'HomeController@actualite')->name('actualite');
Route::get('{id}/actualite', 'HomeController@singleactualite')->name('singleactualite');
Route::get('promotion-tunimeuble', 'HomeController@promotions')->name('promotionstunimeuble');
Route::get('{id}/download', 'HomeController@download')->name('download');
Route::get('{id}/single/catalogue', 'HomeController@singlecatalogue')->name('single.catalogue');

//register
Route::get('/register/{id}', 'Auth\LoginController@create')->name('register');
Route::post('register', 'Auth\LoginController@store')->name('registeruser');
Route::get('login', 'Auth\LoginController@viewlogin')->name('login');
Route::post('registerlogin', 'Auth\LoginController@login')->name('registerlogin');

Route::group(['middleware' => ['auth']], function() {

Route::get('logout', function ()
  {    auth()->logout();
      Session()->flush();
      return Redirect()->route('/');
  })->name('logout');
});

//** for admin user */
Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function() {

  Route::get('dashboardAdmin','backend\DashboardController@indexadmin')->name('dashboardadmin');
  Route::resource('users','UserManagement\UserController');
  Route::get('user/change/{id}','UserManagement\UserController@change')->name('users.change');
  Route::patch('user/change/update/{id}','UserManagement\UserController@savechange')->name('users.savechange');
  Route::resource('categories', 'backend\CategoryController');
  Route::resource('roles','UserManagement\RoleController');
  Route::post('pack/register','UserManagement\UserController@registerpack')->name('registerpack');
  Route::resource('packs', 'backend\PackController');
  Route::resource('souscategory', 'backend\SouscategoryController');
  Route::get('{id}/delete-sous-category', 'backend\SouscategoryController@deletesouscategory')->name('deletesouscategory');
  
  Route::resource('frontendpages', 'backend\PagesController');
  //apropos
  Route::get('modifier-apropos-page', 'backend\PagesController@apropos')->name('aproposbackend');
  Route::patch('{id}/modifier-apropos', 'backend\PagesController@updateapropos')->name('apropos.update');
  //commment ça marche
  Route::get('modifier-comment-page', 'backend\PagesController@comment')->name('commentbackend');
  Route::patch('{id}/modifier-comment', 'backend\PagesController@updatecomment')->name('comment.update');
   //FAQ page
   Route::get('modifier-faq-page', 'backend\PagesController@faq')->name('faqbackend');
   Route::post('create-faq', 'backend\PagesController@faqstore')->name('faq.store');
   Route::get('{id}/modifier-faq', 'backend\PagesController@editfaq')->name('faq.edit');
   Route::patch('{id}/modifier-faq', 'backend\PagesController@updatefaq')->name('faq.update');
   Route::delete('{id}/modifier-faq', 'backend\PagesController@destroyfaq')->name('faq.destroy');
   //actualite
   Route::resource('Actualite', 'backend\ActualiteController');
      //pub
  Route::resource('pub', 'backend\PubController');
  //bar
  Route::resource('bar', 'backend\BarController');

  
});


//*** for user auth */
Route::group(['prefix' => 'admin', 'middleware' => ['role:user']], function() {
  Route::get('dashboard','backend\DashboardController@index')->name('dashboarduser');
  Route::resource('showrooms', 'backend\ShowroomController');
  Route::resource('products', 'backend\ProductController');
  Route::resource('promotions', 'backend\PromotionController');
  Route::resource('catelog', 'backend\CatelogController');
  Route::resource('catelogues', 'backend\CataloguesController');
});