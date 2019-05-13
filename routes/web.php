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

Route::middleware('auth')->prefix('client')->group(function () {
    
    //Create Appointment
    Route::get('appointment/create','Activities@_createAppointment');
    Route::post('appointment/create/save','Activities@createAppointment');

    //edit Appointment
    Route::get('appointment/edit/{id}','Activities@_editAppointment');
    Route::post('appointment/edit/save/{id}','Activities@editAppointment');

    //view appointment
    Route::get('appointments','Activities@appointments');

    //google import urls
    Route::get('google/appointment/import','Activities@getGoogleCalendarEvents');

    Route::post('google-calendar/adopt','Activities@adoptGoogleCalendar');

    //delete appointment
     Route::get('appointment/delete/{id}','Activities@deleteAppointment');

});
	Auth::routes();


