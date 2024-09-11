<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class File_Controller extends Controller
{
    function upload(Request $req){

        // upload file with api

        $data=$req->file('file')->store('apidocus'); 
        return ['res',$data];
    }
}
