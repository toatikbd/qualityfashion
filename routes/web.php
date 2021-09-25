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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/about-us', function(){
    return view('about-us');
});

Route::get('/contact-us', function(){
    return view('contact-us');
});
Route::get('/men-fashion', function(){
    return view('pages.men-fashion');
});
Route::get('/women-fashion', function(){
    return view('pages.women-fashion');
});
Route::get('/kids-fashion', function(){
    return view('pages.kids-fashion');
});

Route::get('/fabric-printing', function(){
    return view('pages.fabric-printing');
});
Route::get('/design-fabric', function(){
    return view('pages.design-fabric');
});
Route::get('/fabric-dyeing', function(){
    return view('pages.fabric-dyeing');
});




