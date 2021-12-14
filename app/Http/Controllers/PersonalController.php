<?php

namespace App\Http\Controllers;

use App\Models\personal;
use App\Models\rol;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function index(){
        

        $personal = Personal::all();
        $rol = Rol::all();
        return view('personal.index', compact(['personal','rol']));

        //return view('personal.index');
    }
    public function create(){
        $personal = Personal::all();
        $rol = Rol::all();
        return view('personal.create',compact(['personal','rol']));
    }

    public function store(Request $request){
        
        $request->validate([
            
            'nombre_personal' => 'required',
            'apellido_personal' => 'required',
            'ci' => 'required',
            'fecha_nac' => 'required',
            'celular' => 'required',
            'genero' => 'required',
            'idrol' => 'required'
        ]);

        $personal = new personal;

        $personal->nombre_personal = $request->input('nombre_personal');
        $personal->apellido_personal = $request->input('apellido_personal');
        $personal->ci = $request->input('ci');
        $personal->fecha_nac = $request->input('fecha_nac');
        $personal->celular = $request->input('celular');
        $personal->genero = $request->input('genero');
        $personal->idrol = $request['idrol'];

        $personal->save();
        $personal = Personal::all();
        $rol = Rol::all();
        
        return view('personal.index', compact(['personal','rol']));
        //return view('rol.index', compact('rol'));
    }

    public function show(Personal $personal){
        
        //$personal = Personal::all();
        return view('personal.show',compact('personal'));
    }

    public function edit(Personal $personal){

        $rol=Rol::all();
        //$personal = Personal::all();
        return view('personal.edit',compact(['personal','rol']));
    }   

    public function update(Request $request, Personal $personal){

        $request->validate([
            
            'nombre_personal' => 'required',
            'apellido_personal' => 'required',
            'ci' => 'required',
            'fecha_nac' => 'required',
            'celular' => 'required',
            'genero' => 'required',
            'idrol' => 'required'
        ]);


        $personal->nombre_personal = $request->input('nombre_personal');
        $personal->apellido_personal = $request->input('apellido_personal');
        $personal->ci = $request->input('ci');
        $personal->fecha_nac = $request->input('fecha_nac');
        $personal->celular = $request->input('celular');
        $personal->genero = $request->input('genero');
        $personal->idrol = $request['idrol'];

        //$rol->update();

        $personal->save();
        $personal=Personal::all();
        $rol=Rol::all();
        
        return view('personal.index',compact(['personal','rol']));
        //return redirect()->route('rol.show',$rol);
        
    }
    public function destroy(Personal $personal)
    {
        $personal->delete();

        //$rol = Rol::all();
        //return redirect()->route('rol.index', compact('rol'))->with('status', 'Rol eliminado');

        return redirect()->route('personal.index')->with('status', 'Rol eliminado');
    }  
}
