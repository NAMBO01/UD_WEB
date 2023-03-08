<?php

use App\Http\Middleware\EnsureAdminRole;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\ProductController@index');
Route::get('/login', function () {
    return view('login');
});
Route::get('/add-gio-hang/{id_sp}', "App\Http\Controllers\ProductController@add_cart");

Route::get('/update-gio-hang/{id_sp}', "App\Http\Controllers\ProductController@update_cart");

Route::get('/xoa-item-gio-hang/{id_sp}', "App\Http\Controllers\ProductController@del_item_cart");

Route::get('/xoa-gio-hang', "App\Http\Controllers\ProductController@xoa_cart");

Route::get('/gio-hang', "App\Http\Controllers\NormalPageController@cart");

Route::get('/thanh-toan', "App\Http\Controllers\NormalPageController@thanh_toan");

Route::get('/admin', 'App\Http\Controllers\AdminController@du_lieu_dashboard')->middleware(EnsureAdminRole::class);
Route::get('/login-admin', 'App\Http\Controllers\AdminController@login_admin');
Route::get('/logout-admin', 'App\Http\Controllers\AdminController@logout_admin');

Route::post('/dang-nhap-admin', [
    "uses" => "App\Http\Controllers\UserController@login_admin"
]);

Route::get('/admin/ql-san-pham', 'App\Http\Controllers\SpAdminController@index')->middleware(EnsureAdminRole::class);
Route::get('/admin/ql-san-pham/edit/{id_sp}', 'App\Http\Controllers\SpAdminController@edit')->middleware(EnsureAdminRole::class);
Route::post('/admin/ql-san-pham/edit/{id_sp}', 'App\Http\Controllers\SpAdminController@update')->middleware(EnsureAdminRole::class);
Route::get('/admin/ql-san-pham/delete/{id_sp}', 'App\Http\Controllers\SpAdminController@destroy')->middleware(EnsureAdminRole::class);
Route::get('/admin/ql-san-pham/create', 'App\Http\Controllers\SpAdminController@create_sp')->middleware(EnsureAdminRole::class);
Route::post('/admin/ql-san-pham/create', 'App\Http\Controllers\SpAdminController@store')->middleware(EnsureAdminRole::class);

Route::get('/admin/ql-khach-hang', 'App\Http\Controllers\UserAdminController@index')->middleware(EnsureAdminRole::class);
Route::get('/admin/ql-khach-hang/edit/{id_user}', 'App\Http\Controllers\UserAdminController@edit')->middleware(EnsureAdminRole::class);
Route::post('/admin/ql-khach-hang/edit/{id_user}', 'App\Http\Controllers\UserAdminController@update')->middleware(EnsureAdminRole::class);
Route::get('/admin/ql-khach-hang/delete/{id_user}', 'App\Http\Controllers\UserAdminController@destroy')->middleware(EnsureAdminRole::class);

Route::get('/admin/ql-nhan-vien', 'App\Http\Controllers\UserAdminController@nhan_vien')->middleware(EnsureAdminRole::class);
Route::get('/admin/ql-nhan-vien/edit/{id_nv}', 'App\Http\Controllers\UserAdminController@edit_nhan_vien')->middleware(EnsureAdminRole::class);
Route::post('/admin/ql-nhan-vien/edit/{id_nv}', 'App\Http\Controllers\UserAdminController@update_nhan_vien')->middleware(EnsureAdminRole::class);
Route::get('/admin/ql-nhan-vien/delete/{id_nv}', 'App\Http\Controllers\UserAdminController@destroy_nhan_vien')->middleware(EnsureAdminRole::class);

Route::get('/admin/ql-don-hang', 'App\Http\Controllers\DhAdminController@index')->middleware(EnsureAdminRole::class);
Route::get('/admin/ql-don-hang/pagination/{current_page}', 'App\Http\Controllers\DhAdminController@pagination');
Route::get('/admin/ql-don-hang/edit/{id_don_hang}', 'App\Http\Controllers\DhAdminController@edit')->middleware(EnsureAdminRole::class);
Route::post('/admin/ql-don-hang/edit/{id_don_hang}', 'App\Http\Controllers\DhAdminController@update')->middleware(EnsureAdminRole::class);
Route::get('/admin/ql-don-hang/delete/{id_don_hang}', 'App\Http\Controllers\DhAdminController@destroy')->middleware(EnsureAdminRole::class);
Route::get('/admin/ql-don-hang/info/{id_don_hang}', 'App\Http\Controllers\DhAdminController@chi_tiet_don_hang')->middleware(EnsureAdminRole::class);
