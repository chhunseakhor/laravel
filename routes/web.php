<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CustomerController;

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

Route::get('/',function(){
    return view('home');
});

// Route::get('/',[HelloController::class,'index']);
Route::get('/about',[HelloController::class,'about']);

Route::get('/service',[ServiceController::class,'index']);
Route::post('/service',[ServiceController::class,'store']);

Route::get('/customer',[CustomerController::class,'index']);
Route::get('/customer/create',[CustomerController::class,'create']);
Route::get('/customer/{customer}',[CustomerController::class,'show']);
Route::get('/customer/{customer}/edit',[CustomerController::class,'edit']);
Route::patch('/customer/{customer}',[CustomerController::class,'update']);

Route::post('/customer',[CustomerController::class,'store']);

// Route::view('/about','about');
// Route::view('/services','services');


