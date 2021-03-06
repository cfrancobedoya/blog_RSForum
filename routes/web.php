<?php
// Developed by Cristian Franco Bedoya & Santiago Ramón Álvarez Gómez
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PageController@posts')->name('posts');
Route::get('/blog/{post}', 'PageController@post')->name('post');
Route::get('/blog/comment/{comment}', 'PageController@comment')->name('comment');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/lang/{locale}', 'HomeController@changeLang')->name('lang');

Route::get('/serviceTeam', 'ServiceTeamController@index')->name('team');
Route::get('/starwars', 'StarwarsController@index')->name('starwars');

Route::resource('posts', 'Backend\PostController')
->middleware('auth')
->except('show');

Route::resource('comments', 'Backend\CommentController')
->middleware('auth');
// ->except('show');

Route::resource('replies', 'Backend\ReplyController')
->middleware('auth');
// ->except('show');

Route::get('/image/index', 'ImageController@index')->name("image.index");
Route::post('/image/save', 'ImageController@save')->name("image.save");
