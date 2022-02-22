<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Vote\PreviewController;
use App\Http\Controllers\Vote\SiginController;



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


Route::get('/', 'WelcomeController@index')->name('welcome');


Auth::routes();


Route::get('/preview', [PreviewController::class, 'preview'])->name('preview');
Route::get('/preview/{category}', [PreviewController::class, 'category'])->name('preview.category');


// Route::post('/vote', 'Vote\CastVoteController@vote')->name('castVote.vote');
// Route::get('/unvote/{id}', 'Vote\CastVoteController@unvote')->name('castVote.unvote');




Route::middleware(['auth',])->group(function()
{
 
 Route::resource('castVote', 'Vote\CastVoteController');
 Route::get('finishVote', 'Vote\FinishVoteController@index')->name('finishVote.index');

});

Route::group([
    'prefix' => 'user',
    'as' => 'user.',
    'namespace' => 'User',
    'middleware' => ['auth']
], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('castVote', 'Vote\CastVoteController');
});

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'namespace' => 'Admin',
    'middleware' => ['auth','admin']
], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/home', 'HomeController@index')->name('home');
   
});

Route::middleware(['auth','admin'])->group(function()
{
Route::resource('categories', 'CategoriesController');
Route::resource('candidates', 'CandidateController');
Route::resource('voters', 'VotersController');
Route::resource('votes', 'Vote\VotesController'); 
Route::resource('/platform-users', 'UsersController');

});