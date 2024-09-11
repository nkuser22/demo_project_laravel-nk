<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   
    public function index()
    {
        return view('admin/login');
    }

    public function auth(Request $req)
    {
        $email=$req->post('email');
        $password=$req->post('password');
        
        $result=Admin::where(['email'=>$email,'password'=>$password])->get();
        if(isset($result['0']->id)){
            $req->session()->put('admin_login',true);
            $req->session()->put('admin_id',$result['0']->id);
            return redirect('admin/dashboard');

        }else{
            $req->session()->flash('error','Please Enter valid login details');
            return  redirect('admin');
          
        }
        
    }

    public function dashboard()
    {
        return view('admin/dashboard');
    }

    
}
