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
    return view('index4');
});

Route::get ('login',function(){

    Return View::make ('login');
    
    });
Route::get ('register',function(){

        Return View::make ('register');
        
});
Route::view('/register','register');
Route::post('/registerpost','userlogin@register');


Route::view('/login','login');
Route::post('/loginpost','userlogin@login');


Route::view('/newlaundry','admin.newlaundry');
// Route::view('/home1','admin.home1');

Route::view('/home1','admin.home1');
Route::get('home1','home@home');
Route::get('laundry_type','home@index');

Route::post('laundry_type','home@laundry_type');


Route::post('delete_type','home@delete_type');

Route::get('newlaundry','home@newlaundry1');

Route::post('newlaundryupdate','home@newlaundry2');

Route::post('changepassword','userlogin@changepassword');


Route::view('/services','services');

Route::get('services','user@laundryuser');

Route::post('newlaundry','home@newlaundry3');




Route::get('/google_pie_chart', 'LaravelGoogleGraph@index');

