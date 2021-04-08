<?php

use Illuminate\Support\Facades\Route;
use App\Models\Empresa;
use App\Models\Empleado;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('testEmpresas', function () {

    $empresa = Empresa::where('nit','29910719')->first();
    dd($empresa);
});

Route::get('/empleado/{idempleado}', function ($idempleado) {
    $empleado= Empleado::where('id',$idempleado)->get();
    dd($empleado);
});


Route::get('consulta1', function () {
   // $empresa = Empresa::where('nit','29910719')->first();
   // dd($empresa);
    foreach ( Empresa::all() as $v) {
       var_dump($v->nit);
    }
});
Route::get('pEmpresas', function () {

    $empresa = Empresa::where('nit','76643789')->first();
    dd($empresa);
});
Route::get('testEmppleados', function () {

    $empleado = Empleado::where('id','15')->first();
    dd($empleado);
});
Route::get('ppEmpresas', function () {
    $MunguíayGamboa = Empresa::find(9);
    $MunguíayGamboa->nombre = 'Carlos Gri';
    $MunguíayGamboa-> save();
    dd($MunguíayGamboa);
});
Route::get('AgregarEmpresa', function () {
    $Grimaldo = new Empresa;
    $Grimaldo -> nombre = 'Grimaldo SA';
    $Grimaldo -> nit = '20202020';
    $Grimaldo -> save();
    dd($Grimaldo);
    
});
Route::get('toEmpresa', function () {
    $empleado = Empleado::find(4);
    dd($empleado->empresa);
    
});

Route::get('todEmpresas', function () {
    $empleados = Empleado::where('nombre','like','a%')->orderBy('nombre')->get();
    dd($empleados);
    
});

