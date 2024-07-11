<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumeroamigosController extends Controller
{
    public function handle()
    {
        $limite = $this->argument('limite');
        $this->info("Buscando números amigos hasta $limite");

        for ($i = 1; $i <= $limite; $i++) {
            $sumaDivisores = $this->sumaDivisores($i);

            // Evita la comprobación redundante
            if ($i < $sumaDivisores && $this->sumaDivisores($sumaDivisores) == $i) {
                $this->line("Los números $i y $sumaDivisores son amigos");
            }
        }
    }
}
