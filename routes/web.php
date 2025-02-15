<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/dashboard', function () {
    return view('user-admin.dashboard', ['title' => 'Dashboard', 'app' => config('app_details.name')]);
});

Route::get('/payment/management', function () {
    return view('user-admin.payment', ['title' => 'Payment Management', 'app' => config('app_details.name')]);
});


Route::get('/master/program', function () {
    return view('master.program', ['title' => 'Master Program', 'subMenu'=>'Course Management', 'app' => config('app_details.name')]);
});

Route::get('/master/course', function () {
    return view('master.course', ['title' => 'Master Course', 'subMenu'=>'Course Management', 'app' => config('app_details.name')]);
});

Route::get('/master/course/hours', function () {
    return view('master.course-hours', ['title' => 'Master Course Hours', 'subMenu'=>'Course Management', 'app' => config('app_details.name')]);
});

Route::get('/schedule', function () {
    return view('user-admin.schedule', ['title' => 'Schedule', 'subMenu'=>'Course Management', 'app' => config('app_details.name')]);
});

Route::get('/attendance/report', function () {
    return view('user-admin.schedule', ['title' => 'Schedule', 'subMenu'=>'Course Management', 'app' => config('app_details.name')]);
});

Route::get('/master/role', function () {
    return view('user-management.master-role', ['title' => 'Master Role', 'subMenu'=>'User Management', 'app' => config('app_details.name')]);
});