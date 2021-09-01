<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaboratorioController extends Controller
{
    public function index(){return view('laboratorio.index');}
    public function create(){return view('laboratorio.create');}
    public function show($laboratorio){return view('laboratorio.show',['laboratorio'=>$laboratorio]);}
}
