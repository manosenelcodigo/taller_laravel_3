<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //dominio.com/home/index
    public function index()
    {
        //return view('user.profile');
        echo 'hola desde home/index';
    }
    public function nosotros()
    {
        //return view('user.profile');
        echo 'hola desde home/nosotros';
    }
    public function detalle($id=null)
    {
        //return view('user.profile');
        echo 'hola desde home/detalle <br />id='.$id;
    }
}