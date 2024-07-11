<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function create(){

        return view('formulario');

    }

    public function store(Request $request){

        $num1=$request->num1;
        $num2=$request->num2;
    }

    public function createFormNotas(){
        return view(`promedioNotas`);
    }
    public function notas(Request $request){

        $nota1=$request->nota1;
        $nota2=$request->nota2;
        $nota3=$request->nota3;

    }
}

