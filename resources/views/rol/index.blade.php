<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Rol
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- component -->
<section class="container mx-auto p-6 font-mono">
    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
      <div class="w-full overflow-x-auto">
        <a 
              href="{{ route('rol.create') }}"
              class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300">Registrar Rol</a>
        <table class="w-full">
          <thead>
            <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
              <th class="px-4 py-3">IdRol</th>
              <th class="px-4 py-3">Nombre Rol </th>
              <th class="px-4 py-3">Estado</th>
              <th class="px-4 py-3">Acciones</th>
            </tr>
          </thead>
          <tbody class="bg-white">
              @foreach ($rol as $rol)                        
            <tr class="text-gray-700">
              <td class="px-4 py-3 text-ms font-semibold border">{{$rol->idrol}}</td>
              <td class="px-4 py-3 text-ms font-semibold border">{{$rol->nombre_rol}}</td>
              
              @if($rol->estado == 'activo')
                <td class="px-4 py-3 text-xs border">
                  <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> {{$rol->estado}} </span>
                </td>
              @else
                <td class="px-4 py-3 text-xs border">
                  <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-sm"> {{$rol->estado}} </span>
                </td>
              @endif
              
              <td class="px-4 py-3 text-ms font-semibold border">                
                <div>
                  <a class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 border-green-300"
                  href="{{route('rol.show', $rol->idrol)}}">
                      Editar
                  </a>
                </div>
                <br>
                
                <form action="{{ route('rol.destroy', $rol->idrol) }}" method="POST">
                  @csrf @method('DELETE')
                  <button class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 border-red-300">
                    Eliminar</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </section>
            </div>
        </div>
    </div>
</x-app-layout>