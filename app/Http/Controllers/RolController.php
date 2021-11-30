<?php

namespace App\Http\Controllers;

use App\Models\rol;
use Illuminate\Http\Request;


class RolController extends Controller
{
    public function index(){
        $rol = rol::orderBy('id', 'desc')->paginate();

        return view('rol.index');
    }
    public function create(){
        return view('rol.create');
    }
    public function store(Request $request){
        
        $request->validate([
            'idrol' => 'required',
            'nombre_rol' => 'required',
            'estado' => 'required',
        ]);

        $rol = new rol();

        $rol->idrol = $request->idrol;
        $rol->nombre_rol = $request->nombre_rol;
        $rol->estado = $request->estado;

        $rol->save();
        return redirect()->route('rol.show',$rol);
    }
    public function show(Rol $rol){
        return view('rol.show', compact('rol'));
    }
    public function edit($id){
        return view('rol.edit', compact('rol'));
    }   

    public function update(Request $request, Rol $rol){

        $request->validate([
            'idrol' => 'required',
            'nombre_rol' => 'required',
            'estado' => 'required',
        ]);

        $rol->idrol = $request->idrol;
        $rol->nombre_rol = $request->nombre_rol;
        $rol->estado = $request->estado;

        $rol->save();
        return redirect()->route('rol.show',$rol);
    }   
}
