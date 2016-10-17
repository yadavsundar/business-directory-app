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

Route::auth();



Route::group(['prefix' => 'user'], function () {

	Route::get('/overview', ['as' => 'user.overview', 'uses' => 'Users\UserController@getOverview'] );	


	Route::resource('listing', 'Users\ListingController');

	Route::get('/employee/{business}/', ['as' => 'business.employee', 'uses' => 'Users\EmployeeController@showEmployee'] );	

	Route::get('/product/{business}/', ['as' => 'business.product', 'uses' => 'Users\ProductController@showProduct'] );	

	Route::get('/gallery/{business}/', ['as' => 'business.gallery', 'uses' => 'Users\GalleryController@showGallrey'] );	

	Route::get('/product/{business}/', ['as' => 'business.product', 'uses' => 'Users\ProductController@showProduct'] );			


	Route::resource('employee', 'Users\EmployeeController', 
		['except' => ['create', 'edit', 'show']]);	

	Route::resource('product', 'Users\ProductController', 
		['except' => ['create', 'edit', 'show']]);	

	Route::resource('gallery', 'Users\GalleryController', 
		['except' => ['create', 'edit', 'show']]);

	Route::resource('review', 'Users\ReviewController', 
		['except' => ['create', 'edit', 'show']]);				
});



/*
* All routes associoted with admin panel
*/


Route::group(['middleware' => ['web']], function(){

	Route::get('/',  'Guest\GuestController@index');


	Route::get('/business/{category}/{subcategory}', ['as' => 'guest.subcategory', 'uses' => 'Guest\GuestController@show_business_subcategory'] );


	Route::get('/business/{category}', ['as' => 'guest.category', 'uses' => 'Guest\GuestController@show_subcat_in_cat'] );		

	
	Route::get('/userplan', ['as' => 'user.plan', 'uses' => 'Users\UserController@getPlan'] );	


	Route::get('/user/register/{plan}', ['as' => 'user.register', 'uses' => 'Users\UserController@showRegisterForm'] );	

	Route::resource('business', 'Guest\GuestController');


	Route::get('/business/details/{name}', ['as' => 'single_business', 'uses' => 'Guest\GuestController@show_single_business'] );

	Route::get('/control/login', ['as' => 'admin.login', 'uses' => 'Admins\AdminController@getLogin'] );
	
	Route::post('/control/login', 'Admins\AdminController@postLogin');

	Route::get('/control/logout', 'Admins\AdminController@logout');

	Route::group(['middleware' => ['admins']], function(){

		Route::get('control', ['as' => 'dashboard', 'uses' => 'Admins\AdminController@index']);	

		Route::group(['prefix' => 'control'], function () {

		    Route::resource('category', 'Admins\CategoryController', ['except' => ['create', 'show']]);

		    Route::get('/category/{id}/delete', ['as' => 'category.delete', 'uses' => 
		    	'Admins\CategoryController@delete'] );
		    
		    Route::resource('plan', 'Admins\PlanController', ['except' => ['
		    	create', 'show']]);		    


		    Route::get('/plan/{id}/delete', ['as' => 'plan.delete', 'uses' => 
		    	'Admins\PlanController@delete'] );		    
		});		
		
	});

});





