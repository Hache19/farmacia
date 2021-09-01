<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TipoProductoController extends Controller
{
    public function index(){return view('tipoproducto.index');}
    public function create(){return view('tipoproducto.create');}
    public function show($tipoproducto){return view('tipoproducto.show',['tipoproducto'=>$tipoproducto]);}
}
