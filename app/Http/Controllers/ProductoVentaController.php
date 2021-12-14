<?php

namespace App\Http\Controllers;

use App\Models\productoventa;

use App\Models\producto;
use App\Models\venta;
use Illuminate\Http\Request;

class ProductoventaController extends Controller
{
    public function index(){

        $productoventa = Productoventa::all();
        $producto = Producto::all();
        $venta = Venta::all();
        
        //$rol = rol::orderBy('id', 'desc')->paginate();

        return view('productoventa.index', compact(['productoventa','producto','venta']));
    }

    public function create(){

        $productoventa = Productoventa::all();
        $producto = Producto::all();
        $venta = Venta::all();
        

        return view('productoventa.create', compact(['productoventa','producto','venta']));
        //return view('producto.create');
    }

    public function store(Request $request){
        
        $request->validate([
            
            'cantidad' => 'required',
            'subtotal' => 'required',
            'idproducto' => 'required',
            'idventa' => 'required'
        ]);

        $productoventa = new Productoventa;

        $productoventa->cantidad = $request->input('cantidad');
        $productoventa->subtotal = $request->input('subtotal');
        $productoventa->idproducto = $request['idproducto'];
        $productoventa->idventa = $request['idventa'];
        

        $productoventa->save();

        $productoventa=Productoventa::all();
        $producto=Producto::all();
        $venta=Venta::all();
        
        
        return view('productoventa.index',compact(['productoventa','producto','venta']));

        //return redirect()->route('producto.show',$producto);
        //return view('rol.index', compact('rol'));
    }

    public function show(Productoventa $productoventa){
        return view('productoventa.show', compact('productoventa'));
    }

    public function edit(Productoventa $productoventa){

        $productoventa=Productoventa::all();
        $producto=Producto::all();
        $venta=Venta::all();
        
        return view('productoventa.edit',compact(['productoventa','producto','venta']));
        //return view('producto.edit', compact('producto'));
    }   

    public function update(Request $request, Producto $producto){

        $request->validate([
            
            'cantidad' => 'required',
            'subtotal' => 'required',
            'idproducto' => 'required',
            'idventa' => 'required',
            
        ]);

        $productoventa = new Productoventa;

        $productoventa->cantidad = $request->input('cantidad');
        $producto->subtotal = $request->input('subtotal');
        $producto->idproducto = $request->input('idproducto');
        $producto->idventa = $request['idventa'];
        

        //$rol->update();

        //$productoventa->save();

        $productoventa=Productoventa::all();
        $producto=Producto::all();
        $venta=Venta::all();
        
        return view('productoventa.index',compact(['productoventa','producto','venta']));
        //return redirect()->route('rol.show',$rol);
        
    }
    public function destroy(Productoventa $productoventa){
        $productoventa->delete();

        //$rol = Rol::all();
        //return redirect()->route('rol.index', compact('rol'))->with('status', 'Rol eliminado');

        return redirect()->route('productoventa.index')->with('status', 'Producto eliminado');
    }
}
