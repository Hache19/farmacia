<?php

namespace App\Http\Controllers;

use App\Models\producto;

use App\Models\presentacion;
use App\Models\tipoproducto;
use App\Models\laboratorio;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){

        $producto = Producto::all();
        $presentacion = Presentacion::all();
        $tipoproducto = Tipoproducto::all();
        $laboratorio = Laboratorio::all();
        //$rol = rol::orderBy('id', 'desc')->paginate();

        return view('producto.index', compact(['producto','presentacion','tipoproducto','laboratorio']));
    }

    public function create(){

        $producto = Producto::all();
        $presentacion = Presentacion::all();
        $tipoproducto = Tipoproducto::all();
        $laboratorio = Laboratorio::all();

        return view('producto.create', compact(['producto','presentacion','tipoproducto','laboratorio']));
        //return view('producto.create');
    }

    public function store(Request $request){
        
        $request->validate([
            
            'nombre_producto' => 'required',
            'descripcion' => 'required',
            'precio' => 'required',
            'idpresentacion' => 'required',
            'idtipoproducto' => 'required',
            'idlaboratorio' => 'required'
        ]);

        $producto = new Producto;

        $producto->nombre_producto = $request->input('nombre_producto');
        $producto->descripcion = $request->input('descripcion');
        $producto->precio = $request->input('precio');
        $producto->idpresentacion = $request['idpresentacion'];
        $producto->idtipoproducto = $request['idtipoproducto'];
        $producto->idlaboratorio = $request['idlaboratorio'];

        $producto->save();

        $producto=Producto::all();
        $presentacion=Presentacion::all();
        $tipoproducto=Tipoproducto::all();
        $laboratorio=Laboratorio::all();
        
        return view('producto.index',compact(['producto','presentacion','tipoproducto','laboratorio']));

        //return redirect()->route('producto.show',$producto);
        //return view('rol.index', compact('rol'));
    }

    public function show(Producto $producto){
        return view('producto.show', compact('producto'));
    }

    public function edit(Producto $producto){

    

        
        $presentacion=Presentacion::all();
        $tipoproducto=Tipoproducto::all();
        $laboratorio=Laboratorio::all();
        
        return view('producto.edit',compact(['producto','presentacion','tipoproducto','laboratorio']));
        //return view('producto.edit', compact('producto'));
    }   

    public function update(Request $request, Producto $producto){

        $request->validate([
            
            'nombre_producto' => 'required',
            'descripcion' => 'required',
            'precio' => 'required',
            'idpresentacion' => 'required',
            'idtipoproducto' => 'required',
            'idlaboratorio' => 'required'
        ]);

        $producto = new Producto;

        $producto->nombre_producto = $request->input('nombre_producto');
        $producto->descripcion = $request->input('descripcion');
        $producto->precio = $request->input('precio');
        $producto->idpresentacion = $request['idpresentacion'];
        $producto->idtipoproducto = $request['idtipoproducto'];
        $producto->idlaboratorio = $request['idlaboratorio'];

        //$rol->update();

        $producto->save();

        $producto=Producto::all();
        $presentacion=Presentacion::all();
        $tipoproducto=Tipoproducto::all();
        $laboratorio=Laboratorio::all();
        
        return view('producto.index',compact(['producto','presentacion','tipoproducto','laboratorio']));
        //return redirect()->route('rol.show',$rol);
        
    }
    public function destroy(Producto $producto){
        $producto->delete();

        //$rol = Rol::all();
        //return redirect()->route('rol.index', compact('rol'))->with('status', 'Rol eliminado');

        return redirect()->route('producto.index')->with('status', 'Producto eliminado');
    }
}
