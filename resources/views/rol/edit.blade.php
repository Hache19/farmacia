@extends ('layouts.plantilla')
@section('title','Editar rol')
@section('content')

    <h1>En esta Seccion podras editar rol</h1>

    <form action="{{ route('rol.update',$rol) }}" method="POST">
            @csrf
            @method('put')
            <label for="">
                Id Rol: <input type="text" name="idrol" value="{{old('idrol',$rol->idrol)}}" >
            </label>
            <br>
            <label for="">
                Nombre Rol: <input type="text" name="nombre_rol" value="{{old('nombre_rol',$rol->nombre_rol)}}" >
            </label>
            <br>
            <label for="">
                estado <input type="text" name="estado" value="{{old('estado',$rol->estado)}}">
            </label>
            <br>
            <button type="submit">ACTUALIZAR</button>
        </form>

@endsection

