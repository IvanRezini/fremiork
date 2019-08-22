<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
   
    public function index(){
     $texto = "Aula de Laravel";
     $complemento = "Meus Complemento";
        return view('site.index', compact('texto','complemento'));
    }
}
