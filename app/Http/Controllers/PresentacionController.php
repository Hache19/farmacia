<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PresentacionController extends Controller
{
    public function index(){return view('presentacion.index');}
    public function create(){return view('presentacion.create');}
    public function show($presentacion){return view('presentacion.show',['presentacion'=>$presentacion]);}
}
