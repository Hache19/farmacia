<?php

namespace App\Http\Controllers;

use App\Models\rol;
use Illuminate\Http\Request;


class RolController extends Controller
{
    public function index(){

        $rol = Rol::all();
        $rol = rol::orderBy('id', 'desc')->paginate();

        return view('rol.index', compact('rol'));
    }
    public function create(){
        return view('rol.create');
    }
    public function store(Request $request){
        
        $request->validate([
            
            'nombre_rol' => 'required',
            'estado' => 'required',
        ]);

        $rol = new rol();

        
        $rol->nombre_rol = $request->nombre_rol;
        $rol->estado = $request->estado;

        $rol->save();
        //return redirect()->route('rol.show',$rol);
        return view('rol.index', compact('rol'));
    }

    public function show(Rol $rol){
        return view('rol.show', compact('rol'));
    }

    public function edit($id){
        return view('rol.edit', compact('rol'));
    }   

    public function update(Request $request, Rol $rol){

        $fields=$request->validate([
            
            'nombre_rol' => 'required',
            'estado' => 'required',
        ]);

        $rol->nombre_rol = $request->nombre_rol;
        $rol->estado = $request->estado;

        $rol->update($fields);
        $rol=Rol::all();

        return view('rol.index', compact('rol'));
        //$rol->save();
        //return redirect()->route('rol.show',$rol);
        
    }
    public function destroy(Rol $rol)
    {
        $rol->delete();

        $rol = Rol::all();

        return redirect()->route('rol.index', compact('rol'))->with('status', 'Rol eliminado');
    }  
}
