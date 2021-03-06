<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Personal
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                @if ($errors->any())
                <div class="alert alert-danger" style="margin-top: 20px;">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li></li>
                            <div class="flex bg-red-100 rounded-lg p-4 mb-4 text-sm text-red-700" role="alert">
                                <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                                </svg>
                                <div>
                                    <span class="font-medium">{{$error}}</span>
                                </div>
                            </div>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="max-w-lg mx-auto">

                    <form action="{{route('personal.update', $personal)}}" method="POST">
                        @csrf @method('PUT')
                        <div class="mb-6">
                            <label for="nombre_personal" class="text-sm font-medium text-gray-900 block mb-2">Nombre Personal:</label>
                            <input value=" {{old('nombre_personal', $personal->nombre_personal)}} " type="text" id="nombre_personal" name="nombre_personal" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                        </div>
                        <div class="mb-6">
                            <label for="apellido_personal" class="text-sm font-medium text-gray-900 block mb-2">Apellido Personal:</label>
                            <input value=" {{old('apellido_personal', $personal->apellido_personal)}} " type="text" id="apellido_personal" name="apellido_personal" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  required="">
                        </div>
                        <div class="mb-6">
                            <label for="ci" class="text-sm font-medium text-gray-900 block mb-2">C.I.:</label>
                            <input value=" {{old('ci', $personal->ci)}} " type="number" id="ci" name="ci" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  required="">
                        </div>
                        <div class="mb-6">
                            <label for="fecha_nac" class="text-sm font-medium text-gray-900 block mb-2">C.I.:</label>
                            <input value=" {{old('fecha_nac', $personal->fecha_nac)}} " type="date" id="fecha_nac" name="fecha_nac" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  required="">
                        </div>
                        <div class="mb-6">
                            <label for="celular" class="text-sm font-medium text-gray-900 block mb-2">Celular:</label>
                            <input value=" {{old('celular', $personal->celular)}} " type="number" id="celular" name="celular" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  required="">
                        </div>
                        <div class="mb-6">
                            <label for="genero" class="text-sm font-medium text-gray-900 block mb-2">Genero:</label>
                            <input type="radio" name="genero" value="masculino"> Masculino
                            <input type="radio" name="genero" value="femenino"> Femenino<br>

                        </div>
                        <div class="mb-6">
                            <label for="idrol" class="text-sm font-medium text-gray-900 block mb-2">
                                Idrol:
                            </label>
                            <select name="idrol" class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400 
                                        text-gray-600 placeholder-gray-400
                                        outline-none">                            
                                @foreach ($rol as $rol)
                                    <option value="{{$rol->idrol}}">{{$rol->nombre_rol}}</option>                                                
                                @endforeach
                            </select>
                        </div>
                        

                        <a href="{{ route('personal.index') }}"
                        class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300">
                            Volver
                        </a>
                        <button type="submit" class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300">
                            Actualizar
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>