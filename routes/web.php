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

Route::post('course/register/{id?}','Activities@saveCourse');
Route::get('learn/{school?}/{courses?}','Pages@courses');

Route::prefix('admin')->group(function () {
    Route::get('school/create','Pages@createSchool');
    Route::get('course/create','Pages@createCourse');
    Route::get('school/edit/{id?}','Pages@editSchool');
    Route::get('course/edit/{id?}','Pages@editCourse');


    Route::post('school/create/save','Pages@_createSchool');
    Route::post('course/create/save','Pages@_createCourse');
    Route::post('school/edit/save/{id?}','Pages@_editSchool');
    Route::post('course/edit/save/{id?}','Pages@_editCourse');



});
