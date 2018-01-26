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

        Route::get('admin_add','AdminController@admin_add');
        Route::post('add_admin','AdminController@add_admin');
});




//系统统计

Route::group(["prefix"=>"admin","namespace"=>"admin"],function(){

    Route::get('charts_1','ChartsController@charts_1');
    Route::get('charts_2','ChartsController@charts_2');
    Route::get('charts_3','ChartsController@charts_3');
    Route::get('charts_4','ChartsController@charts_4');
    Route::get('charts_5','ChartsController@charts_5');
    Route::get('charts_6','ChartsController@charts_6');
    Route::get('charts_7','ChartsController@charts_7');


});

   


//会员管理
Route::group(["prefix"=>"admin","namespace"=>"admin"],function(){

    Route::get('member_add','MemberController@member_add');
    Route::get('member_del','MemberController@member_del');
    Route::get('member_list','MemberController@member_list');
    Route::get('member_show','MemberController@member_show');
    Route::get('member_record_browse','MemberController@member_record_browse');
    Route::get('member_record_download','MemberController@member_record_download');
    Route::get('member_record_share','MemberController@member_record_share');


  });



//系统管理
Route::group(["prefix"=>"admin","namespace"=>"admin"],function(){
    Route::get('system_base','SystemController@system_base');
    Route::get('system_category','SystemController@system_category');
    Route::get('system_data','SystemController@system_data');
    Route::get('system_shielding','SystemController@system_shielding');
    Route::get('system_log','SystemController@system_log');
});



//产品管理
Route::group(["prefix"=>"admin","namespace"=>"admin"],function(){

    Route::get('product_brand','ProductController@product_brand');
    Route::get('product_category','ProductController@product_category');
    Route::get('product_category_add','ProductController@product_category_add');
    
    Route::get('product_list','ProductController@product_list');
    Route::get('product_add','ProductController@product_add');
});

Route::group(["prefix"=>"admin","namespace"=>"admin"],function(){



	Route::get('article_add','PublicController@article_add');
	Route::get('picture_add','PublicController@picture_add');
	
	



	

	Route::get('article_list','PublicController@article_list');
	Route::get('article_class_edit','PublicController@article_class_edit');
	Route::get('picture_list','PublicController@picture_list');
   
    Route::get('feedback_list','PublicController@feedback_list');


   
   	

   	
   
   	


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