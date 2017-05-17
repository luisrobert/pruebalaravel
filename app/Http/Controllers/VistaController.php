<?php

namespace Prueba\Http\Controllers;

use Illuminate\Http\Request;

use Prueba\Http\Requests;
use Prueba\Http\Controllers\Controller;

class VistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');//
    }
    public function contactos()
    {
        return view('contactos');//
    }
    public function comentarios()
    {
        return view('comentarios');//
    }


}
