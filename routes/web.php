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

Route::get('/', 'Activities@home');
Route::post('course/register/{id?}','Activities@saveCourse');
Route::get('school/{school?}','Pages@getSchoolCourses');
Route::get('course/{courseId?}','Activities@registercourse');
Route::get('thanks','Activities@thanks');

Route::middleware(['auth'])->prefix('admin')->group(function () {
    
    Route::get('school/create','Pages@createSchool');
    Route::get('course/create','Pages@createCourse');
    Route::get('school/edit/{id?}','Pages@editSchool');
    Route::get('course/edit/{id?}','Pages@editCourse');
    Route::get('schools','Pages@viewSchools');
    Route::get('applicants/{courseId?}','Activities@getRegisteredUsers');
    Route::get('school/courses/{id?}','Pages@adminSchoolCourses');
    Route::get('promote/{table?}/{id?}','Activities@promote');
    Route::get('unpromote/{table?}/{id?}','Activities@promote');

    Route::post('school/create/save','Pages@_createSchool');
    Route::post('course/create/save','Pages@_createCourse');
    Route::post('school/edit/save/{id?}','Pages@_editSchool');
    Route::post('course/edit/save/{id?}','Pages@_editCourse');



});
	Auth::routes();


