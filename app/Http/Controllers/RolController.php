<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RolController extends Controller
{
    public function index(){return view('rol.index');}
    public function create(){return view('rol.create');}
    public function show($rol){return view('rol.show',['rol'=>$rol]);}
}
