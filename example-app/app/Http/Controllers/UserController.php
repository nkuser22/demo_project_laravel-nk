<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    

    function loadview(){
        $data['users']=array('joe','tom',"sandy",'uf');
       
        //$data['title']='fjjfjg';
       return view('users',$data);
    }
    
   //  login function with input field
    function getdata(Request $req){

       $data=$req->input('username');
       $req->session()->put('user',$data);
      return redirect('profile');

    }

   //  table me se all data get krne ke liye
    function dbconection(){
        return DB::select("select * from users");
    }

   //  table me se all data get krne ke liye
    function getuserdata(){

        return User::all();
     }

  // api get get krne ke liye
     function getapi(){

        return Http::get("https://reqres.in/api/users?page=1");
     }
 

     function storedata(Request $req){
       
      $data=$req->input('username');
      $req->session()->flash('user',$data);
      return redirect('register');
     
   }

     
   
   // Register api 
   function register(Request $req){
      if($req->input('name')!='' && $req->input('email')!='' && $req->input('mobile') && $req->input('password')){
      $users = new User;
      $users->name=$req->input('name');
      $users->email=$req->input('email');
      $users->mobile=$req->input('mobile');
      $users->password=Hash::make($req->input('password'));
      $users->save();
      }else{
         return "All Params Required!";
      }
      return $users;
   }

   public function login(Request $request){
     
    $data = [
        'email' => $request->email,
        'password' => $request->password
    ];
    
  // return  $data;
}


public function addproduct(Request $request){
   
   return $request;
}


}
