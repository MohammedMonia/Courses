<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('fronts.posts.index')
    ->middleware('verified');
});

Route::name('blogs_path')->get('/blogs', 'Blogscontroller@index')->middleware('auth');

Route::name('blogs_path_index1')->get('/', 'Blogscontroller@index1');

Route::name('create_blogs_path')->get('/blogs/create', 'Blogscontroller@create')->middleware('auth');

Route::name('store_blogs_path')->post('/blogs', 'Blogscontroller@store')->middleware('auth');

Route::name('blog_path')->get('/blogs/{id}', 'Blogscontroller@show');

Route::name('edit_blogs_path')->get('/blogs/{id}/edit', 'Blogscontroller@edit')->middleware('auth');

Route::name('update_blogs_path')->put('/blogs/{id}', 'Blogscontroller@update')->middleware('auth');

Route::name('delete_blogs_path')->delete('/blogs/{id}', 'Blogscontroller@delete')->middleware('auth');



route::resource('comments','commentcontroller')->middleware('auth');
Route::name('comments.index1')->get('/comments/comment/index1', 'commentcontroller@index1')->middleware('auth');
Route::name('comments.store')->post('/comments', 'commentcontroller@store');



route::resource('about','AboutController')->middleware('auth');
Route::name('about.front.index')->get('/about/front/index', 'AboutController@index1');

route::resource('contact','ContactController')->middleware('auth');


route::resource('subscribe','SubscribeController')->middleware('auth');
Route::name('subscribe.store')->post('/subscribe', 'SubscribeController@store');







//route::resource('blogs','Blogscontroller');
Auth::routes([
    /*'register' => true,
    'verify' => true,*/
]);

Route::get('/home', 'HomeController@index')->name('home');

