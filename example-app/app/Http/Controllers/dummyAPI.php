<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyAPI extends Controller
{
   function getdata(){
      
      return ['name'=>'naresh kumar'];
   }
}
