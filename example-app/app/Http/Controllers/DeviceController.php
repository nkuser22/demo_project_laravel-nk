<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    function add(Request $req){
            
        $device = new Device;
        $device->name=$req->name;
        $device->member_id=$req->member_id;
        $res=$device->save(); 
        if($res){
            return ['result'=> 'Data Save Succcessful!'];
        }else{
            return ['result'=> 'Opration Failed!'];
        }

    }

    function update(Request $req){

        $device = Device::find($req->id);
        $device->name=$req->name;
        $device->member_id=$req->member_id;
        $result=$device->save();
        if($result){
            return ['data'=> 'Data has been Updated Succcessful!'];
        }else{
            return ['data'=> 'Updated Operation Failed!'];
        }
    }


    function delete($id){
        $device = Device::find($id);
        $res=$device->delete();
        if($res){
              return ['data'=> 'Record Has Been Deleted!'];
        }else{
              return ['data'=> 'Delete Operation Failed!'];
        }

    }


    function search($name){

        return Device::where("name","like","%".$name."%")->get();

    }


    function validation(Request $req){

        return ["a"=>"jjjjjjjj"];

    }


}
