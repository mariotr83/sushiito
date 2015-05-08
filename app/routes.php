<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@home']);


Route::post('contact', ['as' => 'contact', 'uses' => 'HomeController@contact']);

Route::post('subscribe', ['as' => 'contact', 'uses' => 'HomeController@subscribe']);

Route::post('contact_request','ContactController@getContactUsForm');

/*------------------------ ADMIN ---------------------------*/


Route::group(['prefix' => 'admin'], function() {

    Route::get('/', array('uses' => 'HomeController@showLogin'));

    Route::post('/', array('uses' => 'HomeController@doLogin'));

    // Dashboard
    Route::get('index', array('as'=>'admin_index', function(){
        //return Redirect::route('admin_index');
        return View::make('admin.index');
    }));

    Route::group(['prefix' => 'home-slider'], function(){

        Route::get('/', array('as' => 'admin_slider', 'uses' => 'SliderController@index'));

        Route::get('add', array('as'=>'admin_add_slider', 'uses'=>'SliderController@create'));
        Route::post('create', array('as'=>'admin_create_slider','uses'=>'SliderController@add'));

        Route::get('update/{id}', array('as'=>'admin_update_slider', 'uses'=>'SliderController@show'));
        Route::post('update/{id}', array('as'=>'admin_save_slider', 'uses'=>'SliderController@update'));

        Route::post('delete/{id}', array('as'=>'delete_home_slider', 'uses'=>'SliderController@delete'));

        Route::post('update_position', array('as'=>'update_slider_position', 'uses'=>'SliderController@updatePosition'));

    });

    Route::group(['prefix' => 'online-order'], function(){

        Route::get('/', array('as' => 'admin_online_order', 'uses' => 'OnlineController@index'));

        Route::get('update/{id}', array('as'=>'admin_update_link', 'uses'=>'OnlineController@show'));
        Route::post('update/{id}', array('as'=>'admin_save_link', 'uses'=>'OnlineController@update'));

    });
    Route::group(['prefix' => 'menu'], function(){

        Route::get('/', array('as' => 'admin_menu', 'uses' => 'MenuController@index'));

        Route::get('add', array('as'=>'admin_add_slider_menu', 'uses'=>'MenuController@create'));
        Route::post('create', array('as'=>'admin_create_menu_slider','uses'=>'MenuController@addMenuSlider'));

        Route::get('update/{id}', array('as'=>'admin_update_menu', 'uses'=>'MenuController@show'));
        Route::post('update/{id}', array('as'=>'admin_save_menu', 'uses'=>'MenuController@update'));

        Route::post('delete/{id}', array('as'=>'delete_menu_slider', 'uses'=>'MenuController@delete'));

        Route::post('update_position', array('as'=>'update_slider_position', 'uses'=>'MenuController@updatePosition'));

        Route::get('addpdf', array('as'=>'admin_add_pdf_menu', 'uses'=>'MenuController@createpdf'));
        Route::post('createpdf', array('as'=>'admin_create_pdf_menu', 'uses'=>'MenuController@addpdf'));

    ;

    });


});

