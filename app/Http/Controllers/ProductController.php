<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function addProduct(){
        return view('admin.addProduct');
    }
    public function addCategory(){
        return view('admin.addCategory');
    }
}
