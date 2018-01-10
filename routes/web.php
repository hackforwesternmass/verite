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

Auth::routes();

#Route::get('/', 'SurveyController@home')->name('home');
Route::redirect('/', '/audits', 301);

Route::get('/audits', 'AuditController@list')->name('list.audits');
Route::get('/audit/new', 'AuditController@newAudit')->name('new.audit');
Route::get('/audit/{audit}', 'AuditController@index')->name('view.audit');
Route::get('/audit/{audit}/delete', 'AuditController@deleteAudit')->name('delete.audit');
Route::get('/audit/{audit}/edit', 'AuditController@edit')->name('edit.audit');
Route::patch('/audit/{audit}/update', 'AuditController@update')->name('update.audit');
Route::post('/audit/create', 'AuditController@create')->name('create.audit');

Route::get('/companies', 'CompanyController@list')->name('list.companies');
Route::get('/company/new', 'CompanyController@newCompany')->name('new.company');
Route::post('/company/create', 'CompanyController@create')->name('create.company');
Route::get('/company/{company}', 'CompanyController@index')->name('view.company');
Route::get('/company/{company}/delete', 'CompanyController@deleteCompany')->name('delete.company');
Route::get('/company/{company}/edit', 'CompanyController@edit')->name('edit.company');
Route::patch('/company/{company}/update', 'CompanyController@update')->name('update.company');

Route::get('/survey/new', 'SurveyController@newSurvey')->name('new.survey');
Route::get('/survey/{survey}', 'SurveyController@detailSurvey')->name('detail.survey');
Route::get('/survey/view/{survey}', 'SurveyController@viewSurvey')->name('view.survey');
Route::get('/survey/answers/{survey}', 'SurveyController@viewSurveyAnswers')->name('view.survey.answers');
Route::get('/survey/{survey}/delete', 'SurveyController@deleteSurvey')->name('delete.survey');

Route::get('/survey/{survey}/edit', 'SurveyController@edit')->name('edit.survey');
Route::patch('/survey/{survey}/update', 'SurveyController@update')->name('update.survey');

Route::post('/survey/view/{survey}/completed', 'AnswerController@store')->name('complete.survey');
Route::post('/survey/create', 'SurveyController@create')->name('create.survey');

// Questions related
Route::post('/survey/{survey}/questions', 'QuestionController@store')->name('store.question');

Route::get('/question/{question}/edit', 'QuestionController@edit')->name('edit.question');
Route::patch('/question/{question}/update', 'QuestionController@update')->name('update.question');
Route::auth();
