<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Estudiante1;

class PagesController extends Controller
{
    public function fnIndex (){
        return view('welcome');
    }
    public function fnEstDetalle($id){
        $xDetAlumnos=Estudiante1::findOrFail($id);
        return view('Estudiante.pagDetalle', compact('xDetAlumnos'));
    }
    public function fnLista (){
        $xAlumnos=Estudiante1::all();
        return view('pagLista', compact('xAlumnos'));
    }
    public function fnGaleria($numero=0) {
        $valor = $numero;
        $otro = 25;
        //return "Foto de codigo ".$numero;
        //return view('pagGaleria',['valor'=>$numero, 'otro'=>25]);
        return view('pagGaleria', compact('valor', 'otro'));
    }
}