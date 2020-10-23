<?php

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
    return view('welcome');
});

$makerequests = DB::table('requests')->orderBy('id','desc')->limit(111)->get();

View::share('added', $makerequests);

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/main', 'AdminController@index')->name('admin');

Route::post('/main/login', 'AdminController@enter')->name('enter');

Route::post('/sell', 'SellController@draft')->name('draft');

Route::get('/description', 'DescriptionsController@see')->name('see');

Route::get('/sell', 'SellController@index');

Route::get('/payment', 'DevPaymentController@index');

Route::post('/payment', 'DevPaymentController@paydev')->name('momo');

Route::get('/welcome', 'SearchController@search')->name('search');

Route::get('/home', 'HomeController@activity');

Route::get('/projects', 'ProjectsController@projects');

Route::get('/makerequest', 'MakeRequestController@index');

Route::post('/makerequest', 'MakeRequestController@makerequest')->name('makerequest');

Route::post('/file-upload', 'UploadFile');

Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');

Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');

Route::get('email/resend','Auth\VerificationController@resend')->name('verification.resend');


Route::get('/contact-us', function () {
    return view('contact');
});

Route::get('/about-us', function () {
    return view('about');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/church', function () {
    return view('church');
});

Route::get('/business', function () {
    return view('business');
});

Route::get('/complete', function () {
    return view('complete');
});


Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/cookies', function () {
    return view('cookies');
});

Route::get('/advertise', function () {
    return view('advertise');
});


Route::get('/guide', function () {
    return view('guide');
});

Route::get('/main/messages', function () {
  $see = DB::table('contact')->orderBy('id','desc')->simplePaginate(3);
    return view('admin.messages', ['messages' => $see]);
});

Route::get('/messages', function () {
  $see = DB::table('admin_contact')->orderBy('id','desc')->simplePaginate(3);
    return view('messages', ['messages' => $see]);
  });


Route::post('/contact-us', 'ContactController@contact')->name('contact');

Route::get('/jobs', function () {
    return view('jobs');
});

Route::get('/interviews', function () {
    return view('jobs');
});

Route::post('/jobs', 'EnlistController@enlist')->name('enlist');
