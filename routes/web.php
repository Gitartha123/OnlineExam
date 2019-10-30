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

Route::get('teacherpanel','TeacherIndex@TeacherIndex');
Route::get('dropdownlist','TeacherIndex@getsemester')->name('Addpaper');
Route::get('dropdownlist/getsubject/{id}','TeacherIndex@getsubject');
Route::get('/','TeacherIndex@getexam');
Route::get('hodpanel','HodIndex@HodIndex');
});




