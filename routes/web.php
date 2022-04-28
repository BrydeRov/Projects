<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::resource('contact', ContactController::class)->middleware('auth');

Route::resource('project', ProjectController::class);

Route::view('/about' , 'about')->name('about')->middleware('auth');

Route::view('/' , 'Home')->name('Home');

<<<<<<< HEAD
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])
->name('home')
->middleware('auth');
=======
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'] , function(){
    
});
>>>>>>> 5ea8c604f56110e29512c2e393aff38c23e76006
