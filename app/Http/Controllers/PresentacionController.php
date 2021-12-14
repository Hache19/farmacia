<?php

namespace App\Http\Controllers;


use App\Models\presentacion;
use Illuminate\Http\Request;

class PresentacionController extends Controller
{
    public function index(){

        $presentacion = Presentacion::all();
        //$rol = rol::orderBy('id', 'desc')->paginate();
        return view('presentacion.index',compact('presentacion'));
    }

    public function create(){
        return view('presentacion.create');
    }

    public function store(Request $request){
        
        $request->validate([
            
            'nombre_presentacion' => 'required'
            
        ]);

        $presentacion = new Presentacion;

        $presentacion->nombre_presentacion = $request->input('nombre_presentacion');
        

        $presentacion->save();
        return redirect()->route('presentacion.show',$presentacion);
        //return view('presentacion.index', compact('presentacion'));
    }

    public function show(Presentacion $presentacion){
        return view('presentacion.show', compact('presentacion'));
    }

    public function edit(Presentacion $presentacion){
        return view('presentacion.edit', compact('presentacion'));
    }   

    public function update(Request $request, Presentacion $presentacion){

        $request->validate([
            
            'nombre_presentacion' => 'required'
        
        ]);

        $presentacion->nombre_presentacion = $request->input('nombre_presentacion');
        

        //$rol->update();

        $presentacion->save();
        $presentacion=Presentacion::all();
        
        return view('presentacion.index', compact('presentacion'));
        //return redirect()->route('rol.show',$rol);
        
    }
    public function destroy(Presentacion $presentacion)
    {
        $presentacion->delete();

        //$rol = Rol::all();
        //return redirect()->route('rol.index', compact('rol'))->with('status', 'Rol eliminado');

        return redirect()->route('presentacion.index')->with('status', 'presentacion eliminado');
    }  
}
