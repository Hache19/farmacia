<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoteController extends Controller
{
    public function index(){return view('lote.index');}
    public function create(){return view('lote.create');}
    public function show($lote){return view('lote.show',['lote'=>$lote]);}
}
