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
//Start Frontend
Route::get('/', ['as' => 'home', 'uses' => 'Controller@index']);
Route::get('/ve-chung-toi.html', ['as' => 'about', 'uses' => 'Controller@about']);
Route::get('tin-tuc/{cate_id}', ['as' => 'news-list', 'uses' => 'Controller@newsList']);
Route::get('/tin-tuc/{cate_id}/{id}.html', ['as' => 'news-detail', 'uses' => 'Controller@newsDetail']);
Route::get('/du-an.html', ['as' => 'du-an', 'uses' => 'Controller@duan']);
Route::get('du-an/{id}.html', ['as' => 'detail-project', 'uses' => 'Controller@detail']);
Route::get('lien-he.html', ['as' => 'contact', 'uses' => 'Controller@contact']);
Route::post('lien-he.html', ['as' => 'contact', 'uses' => 'Controller@postContact']);
Route::get('/dang-nhap.html', ['as'=>'dang-nhap', 'uses'=>'Controller@login']);
Route::post('/dang-nhap.html', ['as'=>'dang-nhap', 'uses'=>'Controller@postLogin']);
Route::get('/dang-xuat.html', ['as'=>'dang-xuat','uses'=>'Controller@getLogout']);
Route::get('/dang-ky-tai-khoan.html', ['as'=>'dk-tai-khoan','uses'=>'Controller@register']);
Route::post('/dang-ky-tai-khoan.html', ['as'=>'dk-tai-khoan','uses'=>'Controller@postRegister']);
Route::get('/dang-tin.html', ['as'=>'dang-tin','uses'=>'Controller@dangtin']);
Route::post('/store', ['as' => 'product.store', 'uses' => 'Controller@store']);
Route::get('ban-dat-{id}.html', ['as' => 'danh-muc', 'uses' => 'Controller@cate']);
Route::get('ban-dat-{id_cate}/{id}.html', ['as' => 'chi-tiet', 'uses' => 'Controller@chitiet']);
Route::get('tim-kiem.html', ['as' => 'search', 'uses' => 'Controller@search']);
Route::post('/get-child', ['uses' => 'Controller@getChild', 'as' => 'get-child']);
//End Frontend

//Start Backend

Route::get('backend/login', ['as' => 'backend.login-form', 'uses' => 'BackendController@loginForm']);
Route::post('backend/login', ['as' => 'backend.check-login', 'uses' => 'BackendController@checkLogin']);
Route::get('backend/logout', ['as' => 'backend.logout', 'uses' => 'BackendController@logout']);
Route::get('backend/dashboard', ['as' => 'dashboard.index', 'uses' => "BackendController@dashboard"])->middleware('isAdmin');
Route::get('backend/product', ['as' => 'product.index', 'uses' => 'BackendController@productIndex'])->middleware('isAdmin');
Route::get('backend/product/create', ['as' => 'product.create', 'uses' => 'BackendController@productCreate'])->middleware('isAdmin');        
Route::post('backend/product/store', ['as' => 'product.store1', 'uses' => 'BackendController@productStore'])->middleware('isAdmin');        
Route::get('backend/product/{id}/edit',   ['as' => 'product.edit', 'uses' => 'BackendController@productEdit'])->middleware('isAdmin');
Route::post('backend/product/update', ['as' => 'product.update', 'uses' => 'BackendController@productUpdate'])->middleware('isAdmin');
Route::get('backend/product/{id}/destroy', ['as' => 'product.destroy', 'uses' => 'BackendController@productDestroy'])->middleware('isAdmin');
Route::get('backend/product/{id}/check',   ['as' => 'product.check', 'uses' => 'BackendController@productCheck'])->middleware('isAdmin');
Route::get('backend/estate-type', ['as' => 'estate-type.index', 'uses' => 'BackendController@estateIndex'])->middleware('isAdmin');
Route::get('backend/estate-type/create', ['as' => 'estate-type.create', 'uses' => 'BackendController@estateCreate'])->middleware('isAdmin');
Route::post('backend/estate-type/store', ['as' => 'estate-type.store', 'uses' => 'BackendController@estateStore'])->middleware('isAdmin');
Route::get('backend/estate-type/{id}/edit',   ['as' => 'estate-type.edit', 'uses' => 'BackendController@estateEdit'])->middleware('isAdmin');
Route::post('backend/estate-type/update', ['as' => 'estate-type.update', 'uses' => 'BackendController@estateUpdate'])->middleware('isAdmin');
Route::get('backend/estate-type/{id}/destroy', ['as' => 'estate-type.destroy', 'uses' => 'BackendController@estateDestroy'])->middleware('isAdmin');
Route::get('backend/projects', ['as' => 'projects.index', 'uses' => 'BackendController@projectIndex'])->middleware('isAdmin');
Route::get('backend/projects/create', ['as' => 'projects.create', 'uses' => 'BackendController@projectCreate'])->middleware('isAdmin');
Route::post('backend/projects/store', ['as' => 'projects.store', 'uses' => 'BackendController@projectStore'])->middleware('isAdmin');
Route::get('backend/projects/{id}/edit',   ['as' => 'projects.edit', 'uses' => 'BackendController@projectEdit'])->middleware('isAdmin');
Route::post('backend/projects/update', ['as' => 'projects.update', 'uses' => 'BackendController@projectUpdate'])->middleware('isAdmin');
Route::get('backend/projects/{id}/destroy', ['as' => 'projects.destroy', 'uses' => 'BackendController@projectDestroy'])->middleware('isAdmin');
Route::get('backend/articles-cate', ['as' => 'articles-cate.index', 'uses' => 'BackendController@article_cate_Index'])->middleware('isAdmin');
Route::get('backend/articles-cate/create', ['as' => 'articles-cate.create', 'uses' => 'BackendController@article_cate_Create'])->middleware('isAdmin');
Route::post('backend/articles-cate/store', ['as' => 'articles-cate.store', 'uses' => 'BackendController@article_cate_Store'])->middleware('isAdmin');
Route::get('backend/articles-cate/{id}/edit',   ['as' => 'articles-cate.edit', 'uses' => 'BackendController@article_cate_Edit'])->middleware('isAdmin');
Route::post('backend/articles-cate/update', ['as' => 'articles-cate.update', 'uses' => 'BackendController@article_cate_Update'])->middleware('isAdmin');
Route::get('backend/articles-cate/{id}/destroy', ['as' => 'articles-cate.destroy', 'uses' => 'BackendController@article_cate_Destroy'])->middleware('isAdmin');
Route::get('backend/articles', ['as' => 'articles.index', 'uses' => 'BackendController@article_Index'])->middleware('isAdmin');
Route::get('backend/articles/create', ['as' => 'articles.create', 'uses' => 'BackendController@article_Create'])->middleware('isAdmin');
Route::post('backend/articles/store', ['as' => 'articles.store', 'uses' => 'BackendController@article_Store'])->middleware('isAdmin');
Route::get('backend/articles/{id}/edit',   ['as' => 'articles.edit', 'uses' => 'BackendController@article_Edit'])->middleware('isAdmin');
Route::post('backend/articles/update', ['as' => 'articles.update', 'uses' => 'BackendController@article_Update'])->middleware('isAdmin');
Route::get('backend/articles/{id}/destroy', ['as' => 'articles.destroy', 'uses' => 'BackendController@article_Destroy'])->middleware('isAdmin');
Route::get('backend/account', ['as' => 'account.index', 'uses' => 'BackendController@acc_Index'])->middleware('isAdmin');
Route::get('backend/account/create', ['as' => 'account.create', 'uses' => 'BackendController@acc_Create'])->middleware('isAdmin');
Route::post('backend/account/store', ['as' => 'account.store', 'uses' => 'BackendController@acc_Store'])->middleware('isAdmin');
Route::get('backend/account/{id}/edit',   ['as' => 'account.edit', 'uses' => 'BackendController@acc_Edit'])->middleware('isAdmin');
Route::post('backend/account/update', ['as' => 'account.update', 'uses' => 'BackendController@acc_Update'])->middleware('isAdmin');
Route::get('backend/account/{id}/destroy', ['as' => 'account.destroy', 'uses' => 'BackendController@acc_Destroy'])->middleware('isAdmin');
Route::get('backend/custom-link', ['as' => 'custom-link.index', 'uses' => 'BackendController@link_Index'])->middleware('isAdmin');
Route::get('backend/custom-link/create', ['as' => 'custom-link.create', 'uses' => 'BackendController@link_Create'])->middleware('isAdmin');
Route::post('backend/custom-link/store', ['as' => 'custom-link.store', 'uses' => 'BackendController@link_Store'])->middleware('isAdmin');
Route::get('backend/custom-link/{id}/edit',   ['as' => 'custom-link.edit', 'uses' => 'BackendController@link_Edit'])->middleware('isAdmin');
Route::post('backend/custom-link/update', ['as' => 'custom-link.update', 'uses' => 'BackendController@link_Update'])->middleware('isAdmin');
Route::get('backend/custom-link/{id}/destroy', ['as' => 'custom-link.destroy', 'uses' => 'BackendController@link_Destroy'])->middleware('isAdmin');
Route::get('backend/contact', ['as' => 'contact.index', 'uses' => 'BackendController@contact_Index'])->middleware('isAdmin');
Route::get('backend/contact/{id}/destroy', ['as' => 'contact.destroy', 'uses' => 'BackendController@contact_Destroy'])->middleware('isAdmin');
//End Backend

