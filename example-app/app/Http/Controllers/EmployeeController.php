<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
     function getdata(){
        // two table join
        return DB::table('employee')
        ->join('company','employee.id','=','company.employee_id')
       // ->where('employee.id',2)
        //->select('company.*')
        ->get();
     }
}
