<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/dashboard', function () {
    return view('user-admin.dashboard', ['title' => 'Dashboard', 'app' => 'JIC Indonesia']);
});

Route::get('/payment/management', function () {
    return view('user-admin.payment', ['title' => 'Payment Management', 'app' => 'JIC Indonesia']);
});


Route::get('/master/program', function () {
    return view('master.program', ['title' => 'Master Program', 'subMenu'=>'Course Management', 'app' => 'JIC Indonesia']);
});

Route::get('/master/course', function () {
    return view('master.course', ['title' => 'Master Course', 'subMenu'=>'Course Management', 'app' => 'JIC Indonesia']);
});

Route::get('/master/course/hours', function () {
    return view('master.course-hours', ['title' => 'Master Course Hours', 'subMenu'=>'Course Management', 'app' => 'JIC Indonesia']);
});