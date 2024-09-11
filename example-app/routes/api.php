<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyAPI;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\File_Controller;
use App\Http\Controllers\UserController;

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


Route::get('getapidata',[dummyAPI::class,'getdata']);

// add data with api
Route::post('add',[DeviceController::class,'add']);

//update  data with api
Route::put('update',[DeviceController::class,'update']);

//delete add data with api
Route::delete('delete/{id}',[DeviceController::class,'delete']);


//search  data with api
Route::get("search/{name}",[DeviceController::class,'search']);

//Validations
Route::post('validate',[DeviceController::class,'validation']);

//file upload
Route::post('upload',[File_Controller::class,'upload']);

Route::post('/register',[UserController::class,'register']);

Route::post('/login',[UserController::class,'login']);

Route::post('/addproduct',[UserController::class,'addproduct']);




