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

// Route::get('/', function () {
//     $n1="hoho";
// 	return view('welcome',['n1' => $n1]);
// });

// Route::get('/about', function () {
	
// 	$n2="haha";
//     return view('about',['n2' => $n2 ]);
// });


Route::get('/', 'Mycont@index');
Route::get('/about', 'Mycont@about');
Route::get('/mahasiswa', 'MahasiswaCont@index');