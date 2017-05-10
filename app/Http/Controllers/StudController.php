<?php

//php artisan make:controller StudController - ovako kreiro

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudController extends Controller
{
   //
    public function pozdrav(){
        return "pozdrav iz stud controllera";
    }
    public function lista(){
        $s=new \App\Stud;
        $studenti=$s->all();
        return print_r(json_decode($studenti,true));
        
       // return $studenti;
    }
}
