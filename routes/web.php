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
    'uses' => 'SectionController@show'
]);

Route::post('/section/add', [
    'as' => 'section.add',
    'uses' => 'SectionController@add'
]);

Route::post('/section/remove', [
    'as' => 'section.remove',
    'uses' => 'SectionController@remove'
]);

Route::get('/section/{id}', [
    'as' => 'topic.index',
    'uses' => 'TopicController@show'
]);

Route::get('section/topic', function () {
    return view('topic');
});

Route::post('login', 'LoginController@authenticate');
Route::post('register', 'LoginController@register');
Route::get('logout', 'LoginController@logout');
