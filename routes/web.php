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
// customer
Route::get('/','CustomerController@index');
Route::get('tambah/customer','CustomerController@create');
Route::get('/customer/{customer}','CustomerController@show');
Route::get('/customer/{customer}/edit','CustomerController@edit');
Route::post('tambah/store','CustomerController@store');
Route::post('customer/{customer}/update','CustomerController@update');
Route::delete('customer/{customer}','CustomerController@destroy');


// cusomer order
Route::get('/order','CustomerOrderController@index');
Route::get('/order/{customerOrder}/edit','CustomerOrderController@edit');
Route::delete('/order/{customerOrder}','CustomerOrderController@destroy');
Route::post('/order/{customerOrder}/update','CustomerOrderController@update');

// cusomer oprator
Route::get('/oprator','OpratorController@index');
Route::get('/oprator/tambah','OpratorController@create');
Route::post('/oprator/tambah/store','OpratorController@store');
Route::delete('/oprator/{oprator}','OpratorController@destroy');
Route::get('/oprator/{oprator}/edit','OpratorController@edit');
Route::post('/oprator/{oprator}/update','OpratorController@update');


// registrasi user
Route::get('/regisuser','RegisuserController@index');
Route::get('/regisuser/{regisuser}','RegisuserController@show');
Route::post('/oprator/tambah/store','OpratorController@store');
Route::delete('/regisuser/{regisuser}','RegisuserController@destroy');
Route::get('/regisuser/{regisuser}/edit','RegisuserController@edit');
Route::post('/regisuser/{regisuser}/update','RegisuserController@update');
Route::get('/tambah/regitrasi','RegisuserController@create');
Route::post('/registrasi/tambah/store','RegisuserController@store');



// cusomer sub kategori
Route::get('/subkategori','SubkategoriController@index');
Route::get('/subkategori/tambah','SubkategoriController@create');
Route::get('/subkategori/{subkategori}','SubkategoriController@show');
Route::post('/subkategori/tambah/store','SubkategoriController@store');
Route::delete('/subkategori/{subkategori}','SubkategoriController@destroy');
Route::get('/subkategori/{subkategori}/edit','SubkategoriController@edit');
Route::post('/subkategori/{subkategori}/update','SubkategoriController@update');


// user
Route::get('/user','UserController@index');
Route::get('/user/tambah','UserController@create');
Route::post('/user/tambah/store','UserController@store');
Route::get('/user/{muser}/edit','UserController@show');
Route::post('/user/{muser}/update','UserController@update');
Route::delete('/user/{muser}','UserController@destroy');
Route::get('/user/pilih_data/status/{type}','UserController@pilih');

//produk
Route::get('/produk','ProdukController@index');
Route::get('/produk/tambah','ProdukController@create');
Route::post('/produk/tambah/store','ProdukController@store');
Route::get('/produk/{produk}/edit','ProdukController@edit');
Route::post('/produk/{produk}/update','ProdukController@update');
Route::get('/produk/{produk}','ProdukController@show');
Route::delete('/produk/{produk}','ProdukController@destroy');

//kategori produk


Route::get('/kategori','KategoriProdukController@index');
Route::get('/kategori/tambah','KategoriProdukController@create');
Route::get('/kategori/{kproduk}/edit','KategoriProdukController@edit');
Route::post('/kategori/tambah/store','KategoriProdukController@store');
Route::delete('/kategori/{kproduk}','KategoriProdukController@destroy');
Route::post('/kategori/{kproduk}/update','KategoriProdukController@update');


//member
Route::get('/member','MemberController@index');
Route::get('/member/{member}','MemberController@show');
Route::get('/member/{member}/edit', 'MemberController@edit');
Route::post('/member/{member}/update','MemberController@update');
Route::get('/member/tambah/store','MemberController@create');
Route::get('/data/tambah/store','MemberController@store');



//registrasi temp_order

Route::get('/torder','TorderController@index');
Route::get('/tambah/torder','TorderController@create');
Route::get('/torder/{torder}/edit','TorderController@edit');
Route::post('/torder/{torder}/update','TorderController@update');
Route::delete('/torder/{torder}','TorderController@destroy');
Route::get('/torder/{torder}','TorderController@show');
Route::post('//torder/store','TorderController@store');


//branch_seller

Route::get('/bseller','BsellerController@index');
Route::get('/branch/tambah','BsellerController@create');
Route::post('/bseller/tambah/store','BsellerController@store');
Route::get('/bseller/{bseller}/edit','BsellerController@edit');
Route::post('/bseller/{bseller}/update','BsellerController@update');
Route::get('/bseller/{bseller}','BsellerController@show');
Route::delete('/bseller/{bseller}','BsellerController@destroy');
Route::post('/bseller/{bseller}/disable','BsellerController@disable');
Route::post('/bseller/{bseller}/active','BsellerController@active');
Route::get('/branch/pdf','BsellerController@cetak_pdf');

//variant produk
Route::get('/variant','variantController@index');
Route::get('variant/tambah','variantController@create');
Route::post('variant/tambah/store','variantController@store');
Route::get('/variant/{variant}/edit','variantController@edit');
Route::post('/variant/{variant}/update','variantController@update');
Route::delete('/variant/{variant}','variantController@destroy');

