<?php

namespace App\Http\Controllers;

use App\Models\venta;
use App\Models\cliente;
use App\Models\personal;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function index(){

        $venta = Venta::all();
        $cliente = Cliente::all();
        $personal = Personal::all();
        //$rol = rol::orderBy('id', 'desc')->paginate();

        return view('venta.index', compact(['venta','cliente','personal']));
        //return view('rol.index', compact('rol'));
    }

    public function create(){
        $venta = Venta::all();
        $cliente = Cliente::all();
        $personal = Personal::all();

        return view('venta.create', compact(['venta','cliente','personal']));
    }

    public function store(Request $request){
        
        $request->validate([
            
            'fecha_venta' => 'required',
            'total_venta' => 'required',
            'idcliente' => 'required',
            'idpersonal' => 'required'
        ]);

        $venta = new Venta;

        $venta->fecha_venta = $request->input('fecha_venta');
        $venta->total_venta = $request->input('total_venta');
        $venta->idcliente = $request['idcliente'];
        $venta->idpersonal = $request['idpersonal'];

        $venta->save();
        $venta = Venta::all();
        $cliente = Cliente::all();
        $personal = Personal::all();

        return view('venta.index', compact(['venta','cliente','personal']));
        //return redirect()->route('rol.show',$rol);
        //return view('rol.index', compact('rol'));
    }

    public function show(Venta $venta){
        return view('venta.show', compact('venta'));
    }

    public function edit(Venta $venta){
        return view('venta.edit', compact('venta'));
    }   

    public function update(Request $request, venta $venta){

        $request->validate([
            
            'fecha_venta' => 'required',
            'total_venta' => 'required',
            'idcliente' => 'required',
            'idpersonal' => 'required',
        ]);

        $venta = new Venta;

        $venta->fecha_venta = $request->input('fecha_venta');
        $venta->total_venta = $request->input('total_venta');
        $venta->idcliente = $request['idcliente'];
        $venta->idpersonal = $request['idpersonal'];

        //$rol->update();

        $venta->save();

        $venta=Venta::all();
        $cliente=Cliente::all();
        $personal=Personal::all();

        return view('venta.edit',compact(['venta','cliente','personal']));
        //return redirect()->route('rol.show',$rol);
        
    }
    public function destroy(Venta $venta)
    {
        $venta->delete();

        //$rol = Rol::all();
        //return redirect()->route('rol.index', compact('rol'))->with('status', 'Rol eliminado');

        return redirect()->route('venta.index')->with('status', 'Venta eliminada');
    }  
}
