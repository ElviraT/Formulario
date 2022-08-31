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

Route::get('/', 'Section1Controller@index')->name('inicio');
Route::post('/add_section-1', ['as' => 'section1.add', 'uses' => 'Section1Controller@add']);

Route::get('formacion/{id}', 'Section2Controller@index')->name('formacion');
Route::post('/add_section-2', ['as' => 'section2.add', 'uses' => 'Section2Controller@add']);

Route::get('figura-juridica/{id}', 'Section3Controller@index')->name('figura-juridica');
Route::post('/add_section-3', ['as' => 'section3.add', 'uses' => 'Section3Controller@add']);