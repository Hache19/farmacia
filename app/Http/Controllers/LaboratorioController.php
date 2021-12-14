<?php

namespace App\Http\Controllers;

use App\Models\Laboratorio;
use Illuminate\Http\Request;

class LaboratorioController extends Controller
{
    public function index(){

        $laboratorio = Laboratorio::all();
        //$rol = rol::orderBy('id', 'desc')->paginate();

        return view('laboratorio.index', compact('laboratorio'));
    }

    public function create(){
        return view('laboratorio.create');
    }

    public function store(Request $request){
        
        $request->validate([
            
            'nombre_laboratorio' => 'required',
        ]);

        $laboratorio = new Laboratorio();

        $laboratorio->nombre_laboratorio = $request->input('nombre_laboratorio');
        

        $laboratorio->save();
        return redirect()->route('laboratorio.show',$laboratorio);
        //return view('rol.index', compact('rol'));
    }

    public function show(Laboratorio $laboratorio){
        return view('laboratorio.show', compact('laboratorio'));
    }

    public function edit(Laboratorio $laboratorio){

        
        return view('laboratorio.edit', compact('laboratorio'));
    }   

    public function update(Request $request, Laboratorio $laboratorio){

        $request->validate([
            
            'nombre_laboratorio' => 'required'
        
        ]);

        $laboratorio->nombre_laboratorio = $request->input('nombre_laboratorio');
        

        //$rol->update();

        $laboratorio->save();
        $laboratorio=Laboratorio::all();
        
        return view('laboratorio.index', compact('laboratorio'));
        //return redirect()->route('rol.show',$rol);
        
    }
    public function destroy(Laboratorio $laboratorio)
    {
        $laboratorio->delete();

        //$rol = Rol::all();
        //return redirect()->route('rol.index', compact('rol'))->with('status', 'Rol eliminado');

        return redirect()->route('laboratorio.index')->with('status', 'laboratorio eliminado');
    }
}
