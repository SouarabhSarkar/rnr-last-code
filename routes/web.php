<?php

use Illuminate\Support\Facades\Route;
use App\Notifications\AccountVerification;
use App\Models\User;
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
    return view('/welcome');
});

// Route::get('/','App\Http\Controllers\UserController@index');

//login blade.php
Route::get('/login', function() {
    return view('/login');
});

//login krwane ka route
Route::post('/login','App\Http\Controllers\Auth\RegisterController@login');


//logout route
Route::get('/logout', 'App\Http\Controllers\Auth\RegisterController@logout');


//signup
Route::get('/signup', function() { 
    return view('/signup');
});

//signup controller 
Route::post('/user','App\Http\Controllers\Auth\RegisterController@register');

//verification link 
// Route::Verify('/primary/email/{verify_code}');
Route::get('/verify/email/primary/{quantity}','App\Http\Controllers\Auth\RegisterController@email_verification')->name('verifyemail');
// Route::get('/hang','App\Http\Controllers\Auth\RegisterController@email_verification');

Route::get('/verified', function() {  
    return view('/verified');
});

//dashboard
Route::get('/navbar', function() {
    return view('/navbar');
});

//route for viewing add company page
Route::get('/addcompany', function() {
    return view('/addcompany');
});


//route for adding company in database
Route::post('/addcompany','App\Http\Controllers\CompanyController@store');

//route for viewing Addcontact page
Route::get('/addcontact', function() {
    return view('/addcontact');
});

//route for add contact in database
Route::post('/addcontact','App\Http\Controllers\ContactController@store');

//route for view findcontact page
Route::get('/findcontact', function(){
    return view('/findcontact');
});
// find contact route
Route::post('/findcontact','App\Http\Controllers\ContactItemController@show_searched_contact');

//route for find contact searched value 
Route::get('/showsearchedcontact', function() {
    return view('/showsearchedcontact');
});

//view viewcontact page route
Route::get('/viewcontact', function(){
    return view('/viewcontact');
});

Route::post('/viewsearchedcontact','App\Http\Controllers\ContactController@fetch_name');


// Route::get('/viewsearchedcontact', function () {
//     $contact = DB::table('contacts')->select('name')->get();
//     return view('/viewsearchedcontact', compact('contact'));
// });

//route to search the entered id in viewcontact page
// Route::post('/viewcontact','App\Http\Controllers\ContactController@show');

//route to view review page
Route::get('/review', function(){
    return view('/review');
});
//Route to add review 
Route::post('/review','App\Http\Controllers\ReviewController@review');


//route for profile

Route::get('/profile', function(){
    return view('/profile');
});

Route::get('/account', function(){
    return view('/account');
});

// Route::get('/debug-sentry', function () {
//     throw new Exception('My first Sentry error!');
// Route


//route to update name & email
Route::post('/profile','App\Http\Controllers\Auth\RegisterController@upate_profile');


Route::get('/index',function(){
    return view('/index');
});
