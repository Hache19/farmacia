@extends ('layouts.plantilla')
@section('title','rol')
@section('content')
<h1>Bienvenido ala seccion Rol</h1>
    <a href=" {{rol.create}} "> Crear Rol </a>
    <a href="{{rol.edit}}"> Editar Rol </a>
        <ul>
            @foreach ($rol as $rol)
                <li>
                    <a href="{{ route('rol.show'), $rol->idrol}}"> {{$rol->nombre_rol}} </a>
                </li>
            @endforeach
        </ul>

        {{ $rol->links }}

@endsection
