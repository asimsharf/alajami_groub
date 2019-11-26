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

Route::GET('/', function () {
    return view('index');
});

Route::GET('/cv', function () {
    return view('cv');
});

Route::GET('/Companies', function () {
    return view('Companies');
});

Route::GET('/services', function () {
    return view('services');
});

Route::GET('/aboutus', function () {
    return view('aboutus');
});


Route::GET('/create_company', 'CompanyController@create')->name('admin.cpanel_forms.create_company');
Route::GET('/show_company', 'CompanyController@show')->name('admin.cpanel_forms.show_company');

Route::GET('/update_resume', 'AjamiResumeController@update')->name('admin.cpanel_forms.update_resume');
Route::GET('/show_resume', 'AjamiResumeController@show')->name('admin.cpanel_forms.show_resume');

Route::GET('/create_fields', 'FieldsController@create')->name('admin.cpanel_forms.create_fields');
Route::GET('/show_fields', 'FieldsController@show')->name('admin.cpanel_forms.show_fields');


Route::GET('/create_slider', 'MainSliderController@create')->name('admin.cpanel_forms.create_slider');
Route::GET('/show_slider', 'MainSliderController@show')->name('admin.cpanel_forms.show_slider');


Route::GET('/create_fields', 'WorkFieldController@create')->name('admin.cpanel_forms.create_fields');
Route::GET('/show_fields', 'WorkFieldController@show')->name('admin.cpanel_forms.show_fields');


Route::GET('/create_media', 'MediaController@create')->name('admin.cpanel_forms.create_media');
Route::GET('/show_media', 'MediaController@show')->name('admin.cpanel_forms.show_media');


Route::GET('/create_services', 'ServiceController@create')->name('admin.cpanel_forms.create_services');
Route::GET('/show_services', 'ServiceController@show')->name('admin.cpanel_forms.show_services');


Route::GET('/create_branch', 'BranchController@create')->name('admin.cpanel_forms.create_branch');
Route::GET('/show_branch', 'BranchController@show')->name('admin.cpanel_forms.show_branch');


Route::GET('/update_setting', 'SettingController@update')->name('admin.cpanel_forms.update_setting');
Route::GET('/show_setting', 'SettingController@show')->name('admin.cpanel_forms.show_setting');
