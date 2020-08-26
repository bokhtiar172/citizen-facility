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

Route::get('/home', 'HomeController@index')->name('home');



Route::group([ "as"=>'admin.' , "prefix"=>'admin' , "namespace"=>'admin' , "middleware"=>['auth','admin']],function(){
      Route::get('dashboard','adminController@index')->name('dashboard');
      Route::get('logout','adminController@logout');


      //division
      Route::resource('division', 'divisionController');

      //district
      Route::resource('district', 'districtController');
      Route::get('district-active/{id}', 'districtController@active');
      Route::get('district-inactive/{id}', 'districtController@inactive');

      // notice
      Route::group(["as"=>'notice.',"prefix"=>'notice'],function(){
        Route::get('location', 'noticeController@select_location');
        Route::get('find-location', 'noticeController@find_location');
        Route::get('store-user/{id}', 'noticeController@store');
        Route::get('notice-form', 'noticeController@notice_form');
        Route::post('store-notice', 'noticeController@notice_store');
      });


      //news
      Route::resource('news', 'newsController');
      Route::get('news-active/{id}', 'newsController@active');
      Route::get('news-inactive/{id}', 'newsController@inactive');



      //Gallary
      Route::resource('image', 'imageController');
      Route::get('image-active/{id}', 'imageController@active');
      Route::get('image-inactive/{id}', 'imageController@inactive');


      // complain
      Route::group(["as"=>'complain.',"prefix"=>'complain'],function(){
        Route::get('all-complain', 'complainController@all_complain');
        Route::get('view-complain/{id}', 'complainController@view_complain');
        Route::post('store', 'complainController@store');
      });
    });




Route::group([ "as"=>'manager.',"prefix"=>'manager',"namespace"=>'manager',"middleware"=>['auth','manager']],function(){
      Route::get('dashboard','managerController@index')->name('dashboard');
      Route::get('nonauthorize','userController@nonauthorize');
      Route::get('single-user/{id}','userController@single_user');
      Route::get('confrim-user/{id}','userController@single_confirm');
      Route::get('register-user','userController@register_user');
      Route::get('confirmUser','userController@confirmUser');

      Route::get('logout','managerController@logout');
    });




Route::group([ "as"=>'user.' , "prefix"=>'user' , "namespace"=>'user' , "middleware"=>['auth','user']],function(){
      Route::get('dashboard','userController@index')->name('dashboard');
      Route::get('division-id/{id}','noticeController@get_division');
      Route::get('get-relife/{id}','noticeController@get_relife');
      Route::get('profile','profileController@profile');
      Route::get('logout','userController@logout');
      Route::get('facility','facilityController@index');
      Route::get('view-tran/{id}','facilityController@view_tran');

      Route::get('about','userController@about');
      Route::get('contact','userController@contact');
      Route::post('Compalin','userController@Compalin');
    });
