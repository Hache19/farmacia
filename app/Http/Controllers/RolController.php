<?php

namespace App\Http\Controllers;

use App\Models\rol;
use Illuminate\Http\Request;


class RolController extends Controller
{
    public function index(){

        $rol = Rol::all();
        //$rol = rol::orderBy('id', 'desc')->paginate();

        return view('rol.index', compact('rol'));
    }

    public function create(){
        return view('rol.create');
    }

    public function store(Request $request){
        
        $request->validate([
            
            'nombre_rol' => 'required',
            'estado' => 'required'
        ]);

        $rol = new Rol;

        $rol->nombre_rol = $request->input('nombre_rol');
        $rol->estado = $request->input('estado');

        $rol->save();
        return redirect()->route('rol.show',$rol);
        //return view('rol.index', compact('rol'));
    }

    public function show(Rol $rol){
        return view('rol.show', compact('rol'));
    }

    public function edit(Rol $rol){
        return view('rol.edit', compact('rol'));
    }   

    public function update(Request $request, Rol $rol){

        $request->validate([
            
            'nombre_rol' => 'required',
            'estado' => 'required'
        ]);

        $rol->nombre_rol = $request->input('nombre_rol');
        $rol->estado = $request->input('estado');

        //$rol->update();

        $rol->save();
        $rol=Rol::all();
        
        return view('rol.index', compact('rol'));
        //return redirect()->route('rol.show',$rol);
        
    }
    public function destroy(Rol $rol){
        $rol->delete();

        //$rol = Rol::all();
        //return redirect()->route('rol.index', compact('rol'))->with('status', 'Rol eliminado');

        return redirect()->route('rol.index')->with('status', 'Rol eliminado');
    }  
}
