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

Route::get('section/{id}', [
    'as' => 'section.show',
    'uses' => 'SectionController@show'
]);

Route::post('section/add', [
    'as' => 'section.add',
    'uses' => 'SectionController@add'
]);

Route::post('section/delete', [
    'as' => 'section.delete',
    'uses' => 'SectionController@delete'
]);

Route::get('section/topic/{id}', [
    'as' => 'topic.show',
    'uses' => 'TopicController@show'
]);

Route::post('section/{section}/topic/add', [
    'as' => 'topic.add',
    'uses' => 'TopicController@add'
]);

Route::post('section/topic/delete', [
    'as' => 'topic.delete',
    'uses' => 'TopicController@delete'
]);

Route::post('section/topic/{topic}/post/add', [
    'as' => 'post.add',
    'uses' => 'PostController@add'
]);

Route::post('section/topic/post/delete', [
    'as' => 'post.delete',
    'uses' => 'PostController@delete'
]);

Route::post('login', 'LoginController@authenticate');
Route::post('register', 'LoginController@register');
Route::get('logout', 'LoginController@logout');
