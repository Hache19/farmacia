<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Cliente
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

                    <form action="{{route('cliente.update', $cliente)}}" method="POST">
                        @csrf @method('PUT')
                        <div class="mb-6">
                            <label for="nombre_cliente" class="text-sm font-medium text-gray-900 block mb-2">
                                Nombre Cliente:
                            </label>
                            <input value=" {{old('nombre_cliente', $cliente->nombre_cliente)}} " type="text" id="nombre_cliente" name="nombre_cliente" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                        </div>
                        <div class="mb-6">
                            <label for="apellido_cliente" class="text-sm font-medium text-gray-900 block mb-2">
                                Apellido cliente:
                            </label>
                            <input value=" {{old('apellido_cliente', $cliente->apellido_cliente)}} " type="text" id="apellido_cliente" name="apellido_cliente" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  required="">
                        </div>
                        <div class="mb-6">
                            <label for="ci" class="text-sm font-medium text-gray-900 block mb-2">
                                C.I.:
                            </label>
                            <input value=" {{old('ci', $cliente->ci)}} " type="number" id="ci" name="ci" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  required="">
                        </div>
                        <div class="mb-6">
                            <label for="celular" class="text-sm font-medium text-gray-900 block mb-2">
                                Direccon:
                            </label>
                            <input value=" {{old('direccion', $cliente->direccion)}} " type="text" id="direccion" name="direccion" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  required="">
                        </div>
                        
                        <div class="mb-6">
                            <label for="celular" class="text-sm font-medium text-gray-900 block mb-2">
                                Celular:
                            </label>
                            <input value=" {{old('celular', $cliente->celular)}} " type="number" id="celular" name="celular" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  required="">
                        </div>
                        

                        <a href="{{ route('cliente.index') }}"
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