<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Rol
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="max-w-lg mx-auto">

                    <form action="{{route('rol.update', $rol)}}" method="POST">
                        @csrf @method('PUT')
                        <div class="mb-6">
                            <label for="nombre" class="text-sm font-medium text-gray-900 block mb-2">Nombre Rol:</label>
                            <input value=" {{old('nombre_rol'), $rol->nombre_rol}} " type="text" id="nombre_rol" name="nombre_rol" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Ingrese el nombre Rol" required="">
                        </div>
                        <div class="mb-6">
                            <label for="estado" class="text-sm font-medium text-gray-900 block mb-2">Estado:</label>
                            <input value=" {{old('estado'), $rol->estado}} " type="text" id="estado" name="estado" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  required="">
                        </div>

                        <button class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300">Guardar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>