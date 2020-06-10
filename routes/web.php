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

Route::get('/', 'Frontend\\BookController@index')->name('homepage');

Route::get('/book/{book}', 'Frontend\\BookController@show')->name('book.show')->middleware('auth');


Route::get('/search', 'Frontend\\DataTables@index')->name('book.search');

Route::post('/search/data', 'Frontend\\DataTables@tables')->name('book.table');


Route::post('/book/{book}/pinjam', 'Frontend\\BookController@borrow')->name('book.pinjam');

Route::get('/user', function (){
   return view('admin.user.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
