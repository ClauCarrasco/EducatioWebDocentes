<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Jenssegers\Date\Date;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CursosController extends Controller
{

    public function index()
    {
        /*Daniel, acá tenes que obtener los totales para mandar en estas variables a la vista*/
        $misAlumnos=2000;
        $misCursos=8;
        $misMesasExamen7dias=20;
        $misMesasExamen30dias=30;

        /*Daniel, acá tenes que mandar el arreglo con los cursos*/
        $misCursos="";

        return view('welcome')
            ->with('misCursos',$misCursos)
            ->with('misAlumnos', $misAlumnos)
            ->with('misCursos', $misCursos)
            ->with('misMesasExamen7dias', $misMesasExamen7dias)
            ->with('misMesasExamen30dias', $misMesasExamen30dias);
    }

    public function ver($idCurso)
    {
        /*Daniel, Buscar aca los datos del curso y devolver un arreglo o loq ue quieras,
        depende como lo hagas podes devolver todo en un solo arreglo*/
        $datosCurso="";

        return view('cursos.ver')
            ->with('elCurso', 'datosCurso');
    }

    public function verMesasExamen()
    {

        return view('cursos.mesasexamen') ;
    }
}
