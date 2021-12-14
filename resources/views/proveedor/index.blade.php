<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Proveedor
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- component -->
                <section class="container mx-auto p-6 font-mono">
                    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                        <div class="w-full overflow-x-auto">
                            <a href="{{ route('proveedor.create') }}"
                                class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300">Registrar
                                Proveedor</a>
                            <table class="w-full">
                                <thead>
                                    <tr
                                        class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                                        <th class="px-4 py-3">IdProveedor</th>
                                        <th class="px-4 py-3">Nombre Proveedor </th>
                                        <th class="px-4 py-3">Celular/telefono</th>
                                        <th class="px-4 py-3">Correo</th>
                                        <th class="px-4 py-3">Direccion</th>
                                        <th class="px-4 py-3">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white">
                                    @foreach ($proveedor as $proveedor)
                                        <tr class="text-gray-700">
                                            <td class="px-4 py-3 text-ms font-semibold border">{{ $proveedor->idproveedor }}
                                            </td>
                                            <td class="px-4 py-3 text-ms font-semibold border">{{ $proveedor->nombre_proveedor }}
                                            </td>
                                            <td class="px-4 py-3 text-ms font-semibold border">{{ $proveedor->celular_telefono }}
                                            </td>
                                            <td class="px-4 py-3 text-ms font-semibold border">{{ $proveedor->correo }}
                                            </td>
                                            <td class="px-4 py-3 text-ms font-semibold border">{{ $proveedor->direccion }}
                                            </td>

                                            <td class="px-4 py-3 text-ms font-semibold border">
                                                <div>
                                                    <a class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 border-green-300"
                                                        href="{{ route('proveedor.show', $proveedor->idproveedor) }}">
                                                        Editar
                                                    </a>
                                                </div>
                                                <br>

                                                <form
                                                    action="{{ route('proveedor.destroy', $proveedor->idproveedor) }}"
                                                    method="POST">
                                                    @csrf @method('DELETE')
                                                    <button
                                                        class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 border-red-300">Eliminar</button>
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
