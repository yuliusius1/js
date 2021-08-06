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
    return view('index');
});

Route::get('/ius', function () {
    return view('ius.index');
});

Route::get('/index-2', function () {
    return view('ius.index-2');
});

Route::get('/404', function () {
    return view('ius.404');
});

Route::get('/about-us', function () {
    return view('ius.about-us');
});

Route::get('/blog-grid', function () {
    return view('ius.blog-grid');
});

Route::get('/blog-single', function () {
    return view('ius.blog-single');
});

Route::get('/contact', function () {
    return view('ius.contact');
});

Route::get('/mail-success', function () {
    return view('ius.mail');
});

Route::get('/pricing', function () {
    return view('ius.pricing');
});

Route::get('/reset-password', function () {
    return view('ius.reset-password');
});

Route::get('/signin', function () {
    return view('ius.signin');
});

Route::get('/signup', function () {
    return view('ius.signup');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/order', function () {
    return view('order');
});

