<?php
use App\Http\Controllers\promNotasController;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tallerController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', tallerController::class);
Route::get(`NumerosPrimos`, [tallerController::class, `NumPrimos`]);
Route::get('/formulario',[CursoController::class,'create']);
Route::post('/formulario',[CursoController::class,'store'])->name('curso.store');
Route:: get(`PromedioNotas`, [promNotasController::class, `promNotas`]);
Route::get('/promedioNotas',[CursoController::class,'createFormNotas']);
Route::post('/formulario',[CursoController::class,'notas'])->name('promedio.notas');
