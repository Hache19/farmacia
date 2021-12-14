<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){

        $cliente = Cliente::all();
        //$rol = rol::orderBy('id', 'desc')->paginate();

        return view('cliente.index', compact('cliente'));
    }

    public function create(){
        return view('cliente.create');
    }

    public function store(Request $request){
        
        $request->validate([
            
            'nombre_cliente' => 'required',
            'apellido_cliente' => 'required',
            'ci' => 'required',
            'direccion' => 'required',
            'celular' => 'required'
        ]);

        $cliente = new cliente;

        $cliente->nombre_cliente = $request->input('nombre_cliente');
        $cliente->apellido_cliente = $request->input('apellido_cliente');
        $cliente->ci = $request->input('ci');
        $cliente->direccion = $request->input('direccion');
        $cliente->celular = $request->input('celular');

        $cliente->save();
        return redirect()->route('cliente.show',$cliente);
        //return view('rol.index', compact('rol'));
    }

    public function show(Cliente $cliente){
        return view('cliente.show', compact('cliente'));
    }

    public function edit(Cliente $cliente){
        return view('cliente.edit', compact('cliente'));
    }   

    public function update(Request $request, Cliente $cliente){

        $request->validate([
            
            'nombre_cliente' => 'required',
            'apellido_cliente' => 'required',
            'ci' => 'required',
            'direccion' => 'required',
            'celular' => 'required'
        ]);

        $cliente->nombre_cliente = $request->input('nombre_cliente');
        $cliente->apellido_cliente = $request->input('apellido_cliente');
        $cliente->ci = $request->input('ci');
        $cliente->direccion = $request->input('direccion');
        $cliente->celular = $request->input('celular');
        

        //$rol->update();

        $cliente->save();
        $cliente=Cliente::all();
        
        

        return view('cliente.index', compact('cliente'));
        //return redirect()->route('rol.show',$rol);
        
    }
    public function destroy(Cliente $cliente){
        $cliente->delete();

        //$rol = Rol::all();
        //return redirect()->route('rol.index', compact('rol'))->with('status', 'Rol eliminado');

        return redirect()->route('cliente.index')->with('status', 'Cliente eliminado');
    }  
}
