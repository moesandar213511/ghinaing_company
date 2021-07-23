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

// Route::get('/home', 'HomeController@index')->name('home');

// for UI
Route::get('/','UIController@index');
Route::get('/about', 'UIController@about');
Route::get('/seo', 'UIController@seo');
Route::get('/training', 'UIController@training');
Route::get('/our_project', 'UIController@our_project');
Route::get('/our_website', 'UIController@our_website');
Route::get('/software', 'UIController@software');
Route::get('/contact', 'UIController@contact');
Route::post('/send_email','MailController@send');

// For admin
Auth::routes();
Route::get('/admin', 'HomeController@index');

Route::group(['middleware' => ['auth']], function () {

    Route::get('logout', 'Auth\LoginController@logout');
  
    // project
    Route::get('/admin/project', 'ProjectController@index');
    Route::post('/insert/project','ProjectController@store');
    Route::post('get_all_project','ProjectController@get_all_project');
    Route::post('/edit/project/{id}','ProjectController@edit');
    Route::post('/update/project','ProjectController@update');
    Route::post('/delete/project/{id}','ProjectController@destroy');

    // partner company
    Route::get('/admin/partner_company', 'PartnercompanyController@index');
    Route::post('/insert/partner_company','PartnercompanyController@store');
    Route::post('get_all_partnercompany','PartnercompanyController@get_all_partnercompany');
    Route::post('/edit/partner/{id}','PartnercompanyController@edit');
    Route::post('/update/partner','PartnercompanyController@update');
    Route::post('/delete/partner/{id}','PartnercompanyController@destroy');

    // feed back
    Route::get('/admin/feedback', 'FeedbackController@index');
    Route::post('/insert/feedback','FeedbackController@store');
    Route::post('get_all_feedback','FeedbackController@get_all_feedback');
    Route::post('/edit/feedback/{id}','FeedbackController@edit');
    Route::post('/update/feedback','FeedbackController@update');
    Route::post('/delete/feedback/{id}','FeedbackController@destroy');

    //about
    Route::get('/admin/about', 'AboutController@index');
    Route::post('get_all_about','AboutController@get_all_about');
    Route::post('update/about','AboutController@update');

    // member
    Route::get('/admin/member', 'MemberController@index');
    Route::post('/insert/member','MemberController@store');
    Route::post('get_all_member','MemberController@get_all_member');
    Route::post('/edit/member/{id}','MemberController@edit');
    Route::post('/update/member','MemberController@update');
    Route::post('/delete/member/{id}','MemberController@destroy');

    // training
    Route::get('/admin/training', 'TrainingController@index');
    Route::post('/insert/training','TrainingController@store');
    Route::post('get_all_training','TrainingController@get_all_training');
    Route::post('/edit/training/{id}','TrainingController@edit');
    Route::post('/update/training','TrainingController@update');
    Route::post('/delete/training/{id}','TrainingController@destroy');

    //digital markting
    Route::get('/admin/markting', 'DigitalMarktingController@index');
    Route::post('/insert/markting','DigitalMarktingController@store');
    Route::post('get_all_markting','DigitalMarktingController@get_all_markting');
    Route::post('/edit/markting/{id}','DigitalMarktingController@edit');
    Route::post('/update/markting','DigitalMarktingController@update');
    Route::post('/delete/markting/{id}','DigitalMarktingController@destroy');

    //our web site
    Route::get('/admin/ourwebsite', 'WebController@index');
    Route::post('get_all_webdesign','WebController@get_all_webdesign');
    Route::post('update/web_design','WebController@update');
    Route::post('insert/ourwebsite','WebController@store');
    Route::post('get_all_website','WebController@get_all_website');
    Route::post('/edit/website/{id}','WebController@edit');
    Route::post('/update/website','WebController@websiteupdate');
});