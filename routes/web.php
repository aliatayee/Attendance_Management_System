<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('attended/{user_id}', '\App\Http\Controllers\AttendanceController@attended' )->name('attended');
Route::get('attended-before/{user_id}', '\App\Http\Controllers\AttendanceController@attendedBefore' )->name('attendedBefore');
Auth::routes(['register' => false, 'reset' => false]);

Route::group(['middleware' => ['auth', 'Role'], 'roles' => ['admin']], function () {
    Route::resource('/employees', '\App\Http\Controllers\EmployeeController');

    Route::get('/attendance', '\App\Http\Controllers\AttendanceController@index')->name('attendance');
    Route::get('/latetime', '\App\Http\Controllers\AttendanceController@indexLatetime')->name('indexLatetime');
    Route::get('/leave', '\App\Http\Controllers\LeaveController@index')->name('leave');
    Route::get('/overtime', '\App\Http\Controllers\LeaveController@indexOvertime')->name('indexOvertime');

    Route::get('/admin', '\App\Http\Controllers\AdminController@index')->name('admin');

    Route::resource('/schedule', '\App\Http\Controllers\ScheduleController');

    Route::get('/check', '\App\Http\Controllers\CheckController@index')->name('check');
    Route::post('check-store','\App\Http\Controllers\CheckController@CheckStore')->name('check_store');


});

Route::group(['middleware' => ['auth']], function () {

    // Route::get('/home', 'HomeController@index')->name('home');



    Route::resource('/employees', '\App\Http\Controllers\EmployeeController', ['only' => [
        'show', 'index',
    ]]);

});

Route::get('/attendance/assign', function () {
    return view('attendance_leave_login');
})->name('attendance.login');

Route::post('/attendance/assign', '\App\Http\Controllers\AttendanceController@assign')->name('attendance.assign');


Route::get('/leave/assign', function () {
    return view('attendance_leave_login');
})->name('leave.login');

Route::post('/leave/assign', '\App\Http\Controllers\LeaveController@assign')->name('leave.assign');


// Route::get('{any}', 'App\http\controllers\VeltrixController@index');