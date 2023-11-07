<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Routes Studys
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get("/", function(){
    return view("welcome");
});

Route::get("/empresa", function(){
    return view("site/empresa");
});

Route::view("/empresa", "site/empresa");

Route::any("/any", function(){
    return view("Permite todo tipo de acesso [put, delete, get, post]");
});

Route::match(["put", "delete"], "/match", function(){
    return "Permite apenas acessos definidos";
});

Route::get("/produto/{id}/{cat}", function($id, $cat = ""){
    return "O id do produto é".$id."<br>"."A categoria é".$cat;
});

Route::get("/sobre", function(){
    return redirect("/empresa");
});

Route::redirect("/sobre", "/empresa");
