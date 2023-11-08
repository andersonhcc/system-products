<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductTestController extends Controller
{
    public function index(){
        return "index";
    }

    public function show(string $id){
        return "show".$id;
    }
}
