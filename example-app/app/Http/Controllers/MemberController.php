<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
   

    function show(){

        $data=Member::paginate(10);
        return view('list',['members'=>$data]);
    }

    function add_data(Request $req){
         
        $member = new Member;
        $member->name=$req->name;
        $member->age=$req->age;
        $member->mobile=$req->mobile;
        $member->save();
        return redirect('addmember');

    }


    function delete($id){


        
        $data=Member::find($id);
        $data->delete();   
        return redirect('list');

    }

    function edit($id){

        $data=Member::find($id);
        return view('edit',["data"=>$data]);
    }


    function update(Request $req){

     // insert with elequent model
        $data=Member::find($req->id);
        $data->name=$req->name;
        $data->age=$req->age;
        $data->mobile=$req->mobile;
        $data->save();
        return redirect('list');

    }
    

    function operations(){
       
// with where condtion
            // return $data=(array)DB::table('members')->find(2);
        // with count condtion
            //   return $data=DB::table('members')->count();

        
 // with where condtion
        //  $data=DB::table('members')
        //   ->where('id',2)
        //   ->get();
        
            // return view('operations',["data"=>$data]);

         
        
        
// insert with query builder
        
          //   return DB::table('members')
        //   ->insert([
        //     'name'=>"Naresh Kumar",
        //     'age'=>"27",
        //     'mobile'=>"8765436789"
        //   ]);

// update with query builder
        
        // return DB::table('members')
        // ->where('id',9)
        // ->update([
        //     'name'=>"Naresh Kumar",
        //     'age'=>"27",
        //     'mobile'=>"9898989898"
        //   ]);


// delete with query builder
        // return DB::table('members')
        // ->where('id',9)->delete();

// Total coulum Sum  with query builder      

     //   return DB::table('members')->sum('id');


// minimum coulum value   with query builder      
  
      //  return DB::table('members')->min('id');

// max coulum value   with query builder      
  
       // return DB::table('members')->max('id');


// Average coulum value   with query builder      
  
   //  return DB::table('members')->avg('id');

    }




}
