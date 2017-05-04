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

Route::get('/', [
    'as' => 'section.index',
    'uses' => 'SectionController@index'
]);

Route::post('section/add', [
    'as' => 'section.add',
    'uses' => 'SectionController@add'
]);

Route::post('section/remove', [
    'as' => 'section.remove',
    'uses' => 'SectionController@remove'
]);

Route::get('section/{id}', [
    'as' => 'section.show',
    'uses' => 'SectionController@show'
]);

Route::get('section/topic/{id}', [
    'as' => 'topic.show',
    'uses' => 'TopicController@show'
]);
/*
Route::get('section/topic/add', [
    'as' => 'topic.add',
    'uses' => 'TopicController@add'
]);

Route::get('section/topic/remove', [
    'as' => 'topic.remove',
    'uses' => 'TopicController@remove'
]);
*/

Route::post('login', 'LoginController@authenticate');
Route::post('register', 'LoginController@register');
Route::get('logout', 'LoginController@logout');
