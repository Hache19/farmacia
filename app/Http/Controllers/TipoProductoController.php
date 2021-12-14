<?php

namespace App\Http\Controllers;

use App\Models\tipoproducto;
use Illuminate\Http\Request;

class TipoproductoController extends Controller
{

    public function index(){

        $tipoproducto = Tipoproducto::all();
        //$rol = rol::orderBy('id', 'desc')->paginate();

        return view('tipoproducto.index', compact('tipoproducto'));
    }

    public function create(){
        return view('tipoproducto.create');
    }

    public function store(Request $request){
        
        $request->validate([
            
            'nombre_tipo' => 'required'
        ]);

        $tipoproducto = new Tipoproducto();

        $tipoproducto->nombre_tipo= $request->input('nombre_tipo');

        $tipoproducto->save();
        return redirect()->route('tipoproducto.show',$tipoproducto);
        //return view('rol.index', compact('rol'));
    }

    public function show(Tipoproducto $tipoproducto){
        return view('tipoproducto.show', compact('tipoproducto'));
    }

    public function edit(Tipoproducto $tipoproducto){
        
        return view('tipoproducto.edit', compact('tipoproducto'));
    }   

    public function update(Request $request, Tipoproducto $tipoproducto){

        $request->validate([
            
            'nombre_tipo' => 'required'
        ]);

        $tipoproducto->nombre_tipo = $request->input('nombre_tipo');
    

        //$rol->update();

        $tipoproducto->save();
        $tipoproducto=Tipoproducto::all();
        
        return view('tipoproducto.index', compact('tipoproducto'));
        //return redirect()->route('rol.show',$rol);
        
    }
    public function destroy(Tipoproducto $tipoproducto)
    {
        $tipoproducto->delete();

        //$rol = Rol::all();
        //return redirect()->route('rol.index', compact('rol'))->with('status', 'Rol eliminado');

        return redirect()->route('tipoproducto.index')->with('status', 'Tipo Producto eliminado eliminado');
    }  


}
