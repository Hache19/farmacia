<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoVentaController extends Controller
{
    public function index(){return view('productoventa.index');}
    public function create(){return view('productoventa.create');}
    public function show($productoventa){return view('productoventa.show',['productoventa'=>$productoventa]);}
}
