<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return view('user-admin.dashboard', ['title' => 'Dashboard', 'app' => config('app_details.name')]);
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/dashboard', function () {
    return view('user-admin.dashboard', ['title' => 'Dashboard', 'app' => config('app_details.name')]);
});




// User Management tabs
Route::get('/master/user', function () {
    return view('user-management.master-user.v_master-user', ['title' => 'Master user', 'subMenu'=>'User Management', 'app' => config('app_details.name')]);
});
Route::get('/master/user/edit', function () {
    return view('user-management.master-user.v_master-user-edit', ['title' => 'Master user', 'subMenu'=>'User Management', 'app' => config('app_details.name')]);
});

// Master student Management
Route::get('/master/student', function () {
    return view('user-management.master-student.v_master-student', ['title' => 'Master student', 'subMenu'=>'User Management', 'app' => config('app_details.name')]);
});
Route::get('/master/student/edit', function () {
    return view('user-management.master-student.v_master-student-edit', ['title' => 'Master student', 'subMenu'=>'User Management', 'app' => config('app_details.name')]);
});

// Master Company Management
Route::get('/master/company', function () {
    return view('user-management.master-company.v_master-company', ['title' => 'Master company', 'subMenu'=>'User Management', 'app' => config('app_details.name')]);
});
Route::get('/master/company/edit', function () {
    return view('user-management.master-company.v_master-company-edit', ['title' => 'Master company', 'subMenu'=>'User Management', 'app' => config('app_details.name')]);
});

// Master Role management
Route::get('/master/role', function () {
    return view('user-management.master-role.v_master-role', ['title' => 'Master Role', 'subMenu'=>'User Management', 'app' => config('app_details.name')]);
});
Route::get('/master/role/edit', function () {
    return view('user-management.master-role.v_master-role-edit', ['title' => 'Master Edit/Add', 'subMenu1'=>'Master Role', 'subMenu'=>'User Management', 'app' => config('app_details.name')]);
});



//Program Management
// Master Branch
Route::get('/master/branch', function () {
    return view('master.branch', ['title' => 'Master Branch', 'subMenu'=>'Program Management', 'app' => config('app_details.name')]);
});


Route::get('/master/batch', function () {
    return view('master.batch', ['title' => 'Master Batch', 'subMenu' => 'Program Management', 'app' => config('app_details.name')]);
});

Route::get('/master/program', function () {
    return view('master.program', ['title' => 'Master Program', 'subMenu'=>'Program Management', 'app' => config('app_details.name')]);
});

Route::get('/program', function () {
    return view('branch.program-details', ['title' => 'Program', 'subMenu'=>'Program Management', 'app' => config('app_details.name')]);
});

Route::get('/master/cabang', function () {
    return view('master-branch.v_master-branch', ['title' => 'Master Edit/Add', 'subMenu1'=>'Master Role', 'subMenu'=>'User Management', 'app' => config('app_details.name')]);
});
Route::get('/master/cabang/edit', function () {
    return view('master-branch.v_master-branch-edit', ['title' => 'Master Edit/Add', 'subMenu1'=>'Master Role', 'subMenu'=>'User Management', 'app' => config('app_details.name')]);
});



//Course Management
Route::get('/master/course', function () {
    return view('master.course', ['title' => 'Master Course', 'subMenu'=>'Course Management', 'app' => config('app_details.name')]);
});

Route::get('/master/course/hours', function () {
    return view('master.course-hours', ['title' => 'Master Course Hours', 'subMenu'=>'Course Management', 'app' => config('app_details.name')]);
});

Route::get('/master/class', function () {
    return view('master.class', ['title' => 'Master Program', 'subMenu'=>'Course Management', 'app' => config('app_details.name')]);
});

Route::get('/schedule', function () {
    return view('user-admin.schedule', ['title' => 'Schedule', 'subMenu'=>'Course Management', 'app' => config('app_details.name')]);
});

Route::get('/attendance/report', function () {
    return view('user-admin.schedule', ['title' => 'Attendance (Report)', 'subMenu'=>'Course Management', 'app' => config('app_details.name')]);
});

Route::get('/payment/management', function () {
    return view('user-admin.payment', ['title' => 'Payment Management', 'app' => config('app_details.name')]);
});

// login page
Route::get('/login', function () {
    return view('login', ['title' => 'Login', 'app' => config('app_details.name')]);
});

// profile page
Route::get('/profile', function () {
    return view('profiles.profile', ['title' => 'Profile ABC','subMenu' => 'Profile', 'app' => config('app_details.name')]);
});