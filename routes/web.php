<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index');

//Admin
Route::get('/adminHome', 'AdminController@index')->middleware('loginCheck');
Route::get('/visitor', 'VisitorController@index')->middleware('loginCheck');

// Admin Panel Service Management
Route::get('/service', 'ServiceController@index')->middleware('loginCheck');
Route::get('/getServicesData', 'ServiceController@getServiceData')->middleware('loginCheck');
Route::post('/ServiceDelete', 'ServiceController@ServiceDelete')->middleware('loginCheck');
Route::post('/ServiceDetails', 'ServiceController@getServiceDetails')->middleware('loginCheck');
Route::post('/ServiceUpdate', 'ServiceController@ServiceUpdate')->middleware('loginCheck');
Route::post('/ServiceAdd', 'ServiceController@ServiceAdd')->middleware('loginCheck');


// Admin Panel Courses manaement
Route::get('/courses', 'CourseController@CoursesIndex')->middleware('loginCheck');
Route::get('/getCoursesData', 'CourseController@getCoursesData')->middleware('loginCheck');
Route::post('/CoursesDelete', 'CourseController@CoursesDelete')->middleware('loginCheck');
Route::post('/CoursesDetails', 'CourseController@getCoursesDetails')->middleware('loginCheck');
Route::post('/CoursesUpdate', 'CourseController@CoursesUpdate')->middleware('loginCheck');
Route::post('/CoursesAdd', 'CourseController@CoursesAdd')->middleware('loginCheck');


// Admin Panel Projects Management
Route::get('/project', 'ProjectController@ProjectIndex')->middleware('loginCheck');
Route::get('/getProjectData', 'ProjectController@getProjectData')->middleware('loginCheck');
Route::post('/ProjectDetails', 'ProjectController@getProjectDetails')->middleware('loginCheck');
Route::post('/ProjectDelete', 'ProjectController@ProjectDelete')->middleware('loginCheck');
Route::post('/ProjectUpdate', 'ProjectController@ProjectUpdate')->middleware('loginCheck');
Route::post('/ProjectAdd', 'ProjectController@ProjectAdd')->middleware('loginCheck');

// Admin Panel Projects Management
Route::post('/contactSend', 'HomeController@ContactSend')->middleware('loginCheck');

Route::get('/contact', 'ContactController@ContactIndex')->middleware('loginCheck');
Route::get('/getContactData', 'ContactController@getContactData')->middleware('loginCheck');
Route::post('/ContactDelete', 'ContactController@ContactDelete')->middleware('loginCheck');

// Admin Panel Review Management
Route::get('/review', 'ReviewController@ReviewIndex')->middleware('loginCheck');
Route::get('/getReviewData', 'ReviewController@getReviewData')->middleware('loginCheck');
Route::post('/ReviewDetails', 'ReviewController@getReviewDetails')->middleware('loginCheck');
Route::post('/ReviewDelete', 'ReviewController@ReviewDelete')->middleware('loginCheck');
Route::post('/ReviewUpdate', 'ReviewController@ReviewUpdate')->middleware('loginCheck');
Route::post('/ReviewAdd', 'ReviewController@ReviewAdd')->middleware('loginCheck');



Route::get('/coursesPage', 'CourseController@CoursePage');
Route::get('/projectsPage', 'ProjectController@ProjectPage');
Route::get('/policy', 'PolicyController@PolicyPage');
Route::get('/terms', 'TermsController@TermPage');
Route::get('/contactPage', 'ContactController@ContactPage');



// Admin Panel Review Management
Route::get('/login', 'LoginController@LoginIndex');
Route::post('/onLogin', 'LoginController@onLogin');
Route::get('/logout', 'LoginController@onLogout');



