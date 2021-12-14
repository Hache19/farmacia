<?php

namespace App\Http\Controllers;

use App\Models\clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index(){

        $clientes = Clientes::all();
        //$rol = rol::orderBy('id', 'desc')->paginate();

        return view('clientes.index', compact('clientes'));
    }

    public function create(){
        return view('clientes.create');
    }

    public function store(Request $request){
        
        $request->validate([
            
            'nombre_cliente' => 'required',
            'apellido_cliente' => 'required',
            'ci' => 'required',
            'direccion' => 'required',
            'celular' => 'required'
        ]);

        $clientes = new Clientes;

        $clientes->nombre_cliente = $request->input('nombre_cliente');
        $clientes->apellido_cliente = $request->input('apellido_cliente');
        $clientes->ci = $request->input('ci');
        $clientes->direccion = $request->input('direccion');
        $clientes->celular = $request->input('celular');

        $clientes->save();
        return redirect()->route('clientes.show',$clientes);
        //return view('rol.index', compact('rol'));
    }

    public function show(Clientes $clientes){
        return view('clientes.show', compact('clientes'));
    }

    public function edit(Clientes $clientes){
        return view('clientes.edit', compact('clientes'));
    }   

    public function update(Request $request, Clientes $clientes){

        $request->validate([
            
            'nombre_cliente' => 'required',
            'apellidp_cliente' => 'required',
            'ci' => 'required',
            'direccion' => 'required',
            'celular' => 'required'
        ]);

        $clientes->nombre_cliente = $request->input('nombre_cliente');
        $clientes->apellido_cliente = $request->input('apellido_cliente');
        $clientes->ci = $request->input('ci');
        $clientes->direccion = $request->input('direccion');
        $clientes->celular = $request->input('celular');
        

        //$rol->update();

        $clientes->save();
        $clientes=Clientes::all();
        
        

        return view('clientes.index', compact('clientes'));
        //return redirect()->route('rol.show',$rol);
        
    }
    public function destroy(Clientes $clientes)
    {
        $clientes->delete();

        //$rol = Rol::all();
        //return redirect()->route('rol.index', compact('rol'))->with('status', 'Rol eliminado');

        return redirect()->route('clientes.index')->with('status', 'Cliente eliminado');
    }  
}
