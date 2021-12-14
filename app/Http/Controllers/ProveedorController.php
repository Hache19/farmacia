<?php

namespace App\Http\Controllers;

use App\Models\proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function index(){

        $proveedor = Proveedor::all();
        //$rol = rol::orderBy('id', 'desc')->paginate();

        return view('proveedor.index', compact('proveedor'));
    }

    public function create(){
        return view('proveedor.create');
    }

    public function store(Request $request){
        
        $request->validate([
            
            'nombre_proveedor' => 'required',
            'celular_telefono' => 'required',
            'correo' => 'required',
            'direccion' => 'required'
        ]);

        $proveedor = new Proveedor;

        $proveedor->nombre_proveedor = $request->input('nombre_proveedor');
        $proveedor->celular_telefono = $request->input('celular_telefono');
        $proveedor->correo = $request->input('correo');
        $proveedor->direccion = $request->input('direccion');
        

        $proveedor->save();
        return redirect()->route('proveedor.show',$proveedor);
        //return view('rol.index', compact('rol'));
    }

    public function show(Proveedor $proveedor){
        return view('proveedor.show', compact('proveedor'));
    }

    public function edit(Proveedor $proveedor){
        return view('proveedor.edit', compact('proveedor'));
    }   

    public function update(Request $request, Proveedor $proveedor){

        $request->validate([
            
            'nombre_proveedor' => 'required',
            'celular_telefono' => 'required',
            'correo' => 'required',
            'direccion' => 'required'
        ]);

        $proveedor->nombre_proveedor = $request->input('nombre_proveedor');
        $proveedor->celular_telefono = $request->input('celular_telefono');
        $proveedor->correo = $request->input('correo');
        $proveedor->direccion = $request->input('direccion');

        //$rol->update();

        $proveedor->save();
        $proveedor=Proveedor::all();
        
        return view('proveedor.index', compact('proveedor'));
        //return redirect()->route('rol.show',$rol);
        
    }
    public function destroy(Proveedor $proveedor)
    {
        $proveedor->delete();

        //$rol = Rol::all();
        //return redirect()->route('rol.index', compact('rol'))->with('status', 'Rol eliminado');

        return redirect()->route('proveedor.index')->with('status', 'Proveedor eliminado');
    }  
}
