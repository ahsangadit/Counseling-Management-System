<?php

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

// Route::get('/admin/middle',function(){
//     return view('admin/admin_middle_content');

// });

/*Login, Register & Landing Pages Routes*/
Route::get('/cmslogin',function(){
   return view('cmslogin');
});

/*Login, Register & Landing Pages Routes*/


/*Admin Routes*/
Route::get('/admin/counselor',function(){
    return view('admin/admin_counselor_section');
 });
 
 Route::get('/admin/customer',function(){
     return view('admin/admin_customer_section');
 });
 
//  Route::get('/admin',function(){
//     return view('admin/admin_dashboard');
//  });
 
 Route::get('/admin/counselor/profile',function(){
     return view('admin/admin_user_profile');
  });
/*Admin Routes*/

/*Customers Routes*/
/*Customers Routes*/

/*Counselor Routes*/
/*Counselor Routes*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


   Route::get('/admin/login','Auth\AdminLoginControllert@showLoginForm')->name('admin.login');
   Route::post('/admin/login','Auth\AdminLoginControllert@login')->name('admin.login.submit');
   Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
   Route::get('/admin/logout','Auth\AdminLoginControllert@logout')->name('admin.logout');

// Route::prefix('/admin')->group(function(){
// });

