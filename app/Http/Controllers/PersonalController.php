<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function index(){return view('personal.index');}
    public function create(){return view('personal.create');}
    public function show($personal){return view('personal.show',['personal'=>$personal]);}
}
