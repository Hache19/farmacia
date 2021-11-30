@extends ('layouts.plantilla')
@section('title','Crear rol')
@section('content')
    <h1>En esta Seccion podras crear un Rol</h1>

    <form action="{{ route('rol.store') }}" method="POST">
            @csrf
            <label for="">
                Id Rol: <input type="text" name="idrol" value="{{old('idrol')}}">
            </label>
            
            <br>
            <label for="">
                Nombre Rol: <input type="text" name="nombre_rol" value="{{old('nombre_rol')}}" >
            </label>

            @error('idrol')
                <br>
                <small>*{{$message}}</small>
                <br>
            @enderror

            <br>
            <label for="">
                estado <input type="text" name="estado" value="{{old('estado')}}">
            </label>
            <br>
            <button type="submit">REGISTRAR</button>
        </form>

@endsection

