<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//首页登录退出路由
Route::group(["prefix" => "admin","namespace" => "admin"],function(){
        Route::get('login','LoginController@login')->name('login');
        Route::post('logindl','LoginController@logindl');
        Route::get('logout','LoginController@logout')->name('logout');
        
        Route::get('index','LoginController@index')->name('index');
        Route::get('welcome','LoginController@welcome');
});



//管理员路由
Route::group(["prefix" => "admin","namespace" => "admin"],function(){
        Route::get('admin_list','AdminController@admin_list');
        Route::get('admin_role','AdminController@admin_role');

        Route::get('search','AdminController@search');

        Route::get('admin_permission','AdminController@admin_permission');
});









Route::group(["prefix"=>"admin","namespace"=>"admin"],function(){


	Route::get('add','Publiccontroller@add');	
	Route::get('article_add','PublicController@article_add');
	Route::get('picture_add','PublicController@picture_add');
	Route::get('product_add','PublicController@product_add');
	



	

	Route::get('article_list','PublicController@article_list');
	Route::get('article_class_edit','PublicController@article_class_edit');
	Route::get('picture_list','PublicController@picture_list');
    Route::get('product_brand','PublicController@product_brand');
    Route::get('product_category','PublicController@product_category');
    Route::get('product_category_add','PublicController@product_category_add');
    
    Route::get('product_list','PublicController@product_list');
    Route::get('feedback_list','PublicController@feedback_list');


    Route::get('member_add','PublicController@member_add');
    Route::get('member_del','PublicController@member_del');
    Route::get('member_list','PublicController@member_list');
    Route::get('member_show','PublicController@member_show');
    Route::get('member_record_browse','PublicController@member_record_browse');
   	Route::get('member_record_download','PublicController@member_record_download');
   	Route::get('member_record_share','PublicController@member_record_share');

   	Route::get('charts_1','PublicController@charts_1');
   	Route::get('charts_2','PublicController@charts_2');
   	Route::get('charts_3','PublicController@charts_3');
   	Route::get('charts_4','PublicController@charts_4');
   	Route::get('charts_5','PublicController@charts_5');
   	Route::get('charts_6','PublicController@charts_6');
   	Route::get('charts_7','PublicController@charts_7');

   	
   	Route::get('system_base','PublicController@system_base');
   	Route::get('system_category','PublicController@system_category');
   	Route::get('system_data','PublicController@system_data');
   	Route::get('system_shielding','PublicController@system_shielding');
   	Route::get('system_log','PublicController@system_log');
   	


});
// Route::get('/', function () {
//     return view('login');
// });

// Route::get('/admin/public/login', function () {
//     return view('PublicController@login');
//  });
// Route::get('admin/public/login','Admin\PublicController@login');
Route::get('/', function () {
   return view('admin/public/login');
});