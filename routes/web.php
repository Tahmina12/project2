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

Route::get('/', 'WelcomeController@index');
Route::get('/category/{id}', 'WelcomeController@category');
Route::get('/newsdetails/{id}', 'WelcomeController@newsdetails');
Route::get('/breakings', 'WelcomeController@breakings');
Route::get('/business', 'WelcomeController@business');
Route::get('/entertainment', 'WelcomeController@entertainment');
Route::get('/contact', 'WelcomeController@contact');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/registerRequest', 'RegisterRequest@registerRequest');
//Control different type of user
Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/request','AdminController@request');
    Route::get('/request/approval/admin/{id}','AdminController@saverequestforAdmin');
    Route::get('/request/approval/employee/{id}','AdminController@saverequestforemployee');
    Route::get('/request/approval/user/{id}','AdminController@saveuserrequest');
    Route::get('/manage-news','AdminNewsController@manageNewsRequest');
    Route::get('/newsinfo/unpublished/{id}','AdminNewsController@unpublishedNewsRequest');
    Route::get('/newsinfo/published/{id}','AdminNewsController@publishedNewsRequest');
    Route::get('/edit/news/Category/{id}','AdminNewsController@showNewsRequest');
    Route::post('/update-news/{id}','AdminNewsController@updateNewsRequest');
});

//controlling end here
//Category Info
Route::get('/add-category', 'CategoryController@createCategory');
Route::post('/new-category', 'CategoryController@storeCategory');
Route::get('/manage-category', 'CategoryController@showCategory');
Route::get('/edit-Category/{id}', 'CategoryController@editCategory');
Route::post('/update-category', 'CategoryController@updateCategory');
Route::get('/unpublished/{id}', 'CategoryController@unpublishedCategory');
Route::get('/published/{id}', 'CategoryController@publishedCategory');
///
//Add Background
Route::get('/add-background','ImageController@BackgroundImageUpload');
Route::post('new-Image','ImageController@storeImage');
//Sub Category Info
Route::get('/sub-category', 'SubCategoryController@createSubCategory');
Route::post('/newsub-category', 'SubCategoryController@storeSubCategory');
Route::get('/manage/sub-category','SubCategoryController@showSubCategory');
Route::get('/edit-subCategory/{id}','SubCategoryController@editSubCategory');
Route::post('/update-subcategory','SubCategoryController@updateSubCategory');
Route::get('/delete-subCategory/{id}','SubCategoryController@deleteSubCategory');
//News Info
Route::get('/add-news', 'NewsController@createNews');
Route::post('/new-news', 'NewsController@storeNews');
Route::get('/manage-news', 'NewsController@showNews');

