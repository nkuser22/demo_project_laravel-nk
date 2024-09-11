<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Str;
use App\Http\Controllers\ProductsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
$info="hi lets learn laravel";
$info=Str::of($info)->ucFirst($info);
//$infos=Str::ucfirst($info);
//$infos2=Str::replaceFirst("hi","Hello" ,$info);
//$infos2=Str::camel($info);
//echo $info;



Route::get('/', function () {
    //echo $name;
    return view('welcome');
});

Route::view('contact','/contact');
Route::view('about','/about');

Route::get('user',[UserController::class,'loadview']);
Route::post('userget',[UserController::class,'getdata']);
//Route::view('login','userget');
Route::view('users','users')->middleware('protectedPage');
Route::view('noaccess','noaccess');
Route::get('user',[UserController::class,'dbconection']);
Route::post('register',[UserController::class,'storedata']);
Route::view('register','register');
Route::get('usersdata',[UserController::class,'getuserdata']);
Route::get('getapi',[UserController::class,'getapi']);
Route::view('profile','profile');
Route::view('upload','upload');
Route::post('upload',[UploadController::class,'index']);
Route::get('list',[MemberController::class,'show']);
Route::post('addmember',[MemberController::class,'add_data']);
Route::view('addmember','addmember');
Route::get('delete/{id}',[MemberController::class,'delete']);
Route::get('edit/{id}',[MemberController::class,'edit']);
Route::post('edit',[MemberController::class,'update']);
Route::get('operations',[MemberController::class,'operations']);


Route::get('eployee',[EmployeeController::class,'getdata']);






Route::get('/logout', function () {
    
  if(session()->has('user')){
    session()->pull('user','null');
  }
  return redirect('login');
   
});


Route::get('/login', function () {
    
    if(session()->has('user')){
        return redirect('profile');
    }
    return view('userget');
     
  });
  
// controller routes groups
  Route::controller(ProductsController::class)->group(function(){
    Route::get('plist','productlist');
    // res with postman
    Route::post('proadd','addproduct');
    Route::put('pupdate','updateproduct');

  });
 


