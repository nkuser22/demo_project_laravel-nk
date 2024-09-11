<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class ProductsController extends Controller
{
    function productlist(){
        // inline blade template
       return Blade::render("<h1>Product List</h1>");
    }

    function addproduct(){

        return "Add Product";
    }

    function updateproduct(){

        return "update product";
    }
}
