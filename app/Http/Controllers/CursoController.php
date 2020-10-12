<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        return view('ver');
    }

    public function verCurso($idCurso)
    {
//        $factura=Facturas::where('id',$idFactura)->first();
//
//        $files=$this->obtenerFiles($idFactura)->get();

        return view('/cursos.ver', ['cursoid' => $idCurso])
            ->with('title','Ver Curso');
    }
}
