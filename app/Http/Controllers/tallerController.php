<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tallerController extends Controller
{
 public function __invoke()
{

}
    public function NumPrimos($number) {
        $NumPrimos = true;
        if ($number < 2) {
            $NumPrimos = false;
        }
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                $NumPrimos = false;
                break;
            }
        }
        if ($NumPrimos) {
            return response()->json(["message" => "El número $number es primo."]);
        } else {
            return response()->json(["message" => "El número $number no es primo."]);
        }
    }


    public function mostrarFormulario()
    {
        return view('ingresar_notas');
    }

    // Procesa las notas ingresadas y calcula el promedio

}

