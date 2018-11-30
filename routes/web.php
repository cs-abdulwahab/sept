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
    return view('index');
});

/*Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

*/

// Route::resource('customers','CustomerController');

/*
Route::get('/', function () {

    return view('customer.index');

})->name('customer.index');


Route::get('/customer/edit', function () {

    return view('customer.edit');

})->name('customer.edit');*/
/*Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/
