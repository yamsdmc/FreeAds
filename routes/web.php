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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Auth::routes(['verify' => true]);


Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/profile', 'ProfileController@profile')->name('profile');
Route::post('/profile', 'ProfileController@update');
Route::get('/profile/{id}/edit', 'MyAdsController@editMyAds');
Route::get('/profile/{id}/delete', 'MyAdsController@deleteAd');
Route::post('/profile/{id}/update', 'MyAdsController@updateAd')->name('update');

Route::get('/ad', 'AnnonceController@adView')->name('ad');
Route::post('/ad', 'AnnonceController@postAd');

Route::get('/adshow', 'AdListingController@showListing')->name('search');
Route::post('/adshow', 'AdListingController@callListing');

Route::get('allAd', 'AllAnnonceController@show')->name('all');

Route::get('myAds', 'MyAdsController@myAds')->name('my_ad');

