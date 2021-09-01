<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function index(){return view('venta.index');}
    public function create(){return view('venta.create');}
    public function show($venta){return view('venta.show',['venta'=>$venta]);}
}
