<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// public routes of authentications 
Route::controller(LoginRegisterController::class)->group(function(){

    Route::post('/register','register');
    Route::post('/login','login');
    // Route::post('/logout','logout');

});

// public routes of add products
Route::controller(ProductController::class)->group(function(){
    Route::get('/showproducts','index');
    Route::post('/addproduct','store');
    Route::get('/showproducts/{id}','show');
    Route::get('/delete/{id}','destroy');
    Route::post('/update/{id}','update');
    Route::get('/search/{name}','search');


});

// user middleware using logout

Route::middleware('auth:sanctum')->group(function(){

  Route::post('/logout',[LoginRegisterController::class,'logout']);

});