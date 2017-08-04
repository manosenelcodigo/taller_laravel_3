<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class VistasController extends Controller
{
    //dominio.com/vistas/index
    public function index()
    {
        return view('vistas.index');
    }
    public function nosotros()
    {
        return view('vistas.nosotros');
    }
    public function productos()
    {
        $texto='mi muñeca me habló';
        $array=array('chile','brasil','españa','venezuela');
        return view('vistas.productos',compact('texto','array'));
    }
}