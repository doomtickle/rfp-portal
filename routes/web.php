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

Route::get('/', 'PagesController@home');
Auth::routes();
Route::get('/about', 'PagesController@about');
Route::get('/home', 'HomeController@index');
Route::resource('proposal_requests', 'ProposalRequestsController');
Route::get('/clients/all', 'ClientsController@index');
Route::resource('clients', 'ClientsController');
Route::get('/{clientName}/{campaignName}', 'ProposalRequestsController@show');
Route::post('{clientName}/{campaignName}/proposals', 'ProposalRequestsController@addFile');

