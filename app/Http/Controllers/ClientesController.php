<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index(){return view('clientes.index');}
    public function create(){return view('clientes.create');}
    public function show($clientes){return view('clientes.show',['clientes'=>$clientes]);}
}