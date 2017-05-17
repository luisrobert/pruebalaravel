<?php

namespace Prueba\Http\Controllers;

use Illuminate\Http\Request;

use Prueba\Http\Requests;
use Prueba\Http\Controllers\Controller;

class FrontController extends Controller
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

    public function contacto()
    {
        return view('contacto');//
    }
    public function reviews()
    {
        return view('reviews');//
    }

    public function admin()
    {
        return view('admin');//
    }
    
}
