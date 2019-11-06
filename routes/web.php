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
/*
Route::get('/', function () {
    return view('Auth/login');
});*/

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('student', 'StudentController');

Route::resource('city', 'CityController');

Route::resource('teacher', 'TeacherController');

Route::resource('grade', 'GradeController');

Route::resource('discipline', 'DisciplineController');


