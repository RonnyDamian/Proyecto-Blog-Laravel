<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
   public function index(){

    return view('curso.index');

   }

   public function create(){
    return view("curso.create");
   }

   public function show($course){
     
     return view("curso.show",compact('course'));
   }
   
}