<?php

namespace App\Http\Controllers;

use App\Models\lote;
use App\Models\producto;
use App\Models\proveedor;
use Illuminate\Http\Request;

class LoteController extends Controller
{
    public function index(){

        $lote = Lote::all();
        $producto = Producto::all();
        $proveedor = Proveedor::all();
        
        //$rol = rol::orderBy('id', 'desc')->paginate();

        return view('lote.index', compact(['lote','producto','proveedor']));
    }

    public function create(){

        $lote = Lote::all();
        $producto = Producto::all();
        $proveedor = Proveedor::all();
        

        return view('lote.create', compact(['lote','producto','proveedor']));
        //return view('producto.create');
    }

    public function store(Request $request){
        
        $request->validate([
            
            'stock' => 'required',
            'vencimiento' => 'required',
            'precio_compra' => 'required',
            'idproducto' => 'required',
            'idproveedor' => 'required'
        ]);

        $lote = new Lote;

        $lote->stock = $request->input('stock');
        $lote->vencimiento = $request->input('vencimiento');
        $lote->precio_compra = $request->input('precio_compra');
        $lote->idproducto = $request['idproducto'];
        $lote->idproveedor = $request['idproveedor'];

        $lote->save();

        $lote=Lote::all();
        $producto=Producto::all();
        $proveedor=Proveedor::all();
        
        
        return view('lote.index',compact(['lote','producto','proveedor']));

        //return redirect()->route('producto.show',$producto);
        //return view('rol.index', compact('rol'));
    }

    public function show(Lote $lote){
        return view('lote.show', compact('lote'));
    }

    public function edit(Lote $lote){

        $lote=Lote::all();
        $producto=Producto::all();
        $proveedor=Proveedor::all();
        
        return view('lote.edit',compact(['lote','producto','proveedor']));
        //return view('producto.edit', compact('producto'));
    }   

    public function update(Request $request, Lote $lote){

        $request->validate([
            
            'stock' => 'required',
            'vencimiento' => 'required',
            'precio_compra' => 'required',
            'idproducto' => 'required',
            'idproveedor' => 'required'
            
        ]);

        $lote = new Lote;

        $lote->stock = $request->input('stock');
        $lote->vencimiento = $request->input('vencimiento');
        $lote->precio_compra = $request->input('precio_compra');
        $lote->idproducto = $request['idproducto'];
        $lote->idproveedor = $request['idproveedor'];

        $lote->save();

        $lote=Lote::all();
        $producto=Producto::all();
        $proveedor=Proveedor::all();
        
        
        return view('lote.index',compact(['lote','producto','proveedor']));
        

        //$rol->update();
        //return redirect()->route('rol.show',$rol);
        
    }
    public function destroy(Lote $lote){
        $lote->delete();

        //$rol = Rol::all();
        //return redirect()->route('rol.index', compact('rol'))->with('status', 'Rol eliminado');

        return redirect()->route('lote.index')->with('status', 'Lote eliminado');
    }  
}
