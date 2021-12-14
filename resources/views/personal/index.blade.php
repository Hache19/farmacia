<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Personal
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- component -->
                <section class="container mx-auto p-6 font-mono">
                    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                        <div class="w-full overflow-x-auto">
                            <a href="{{ route('personal.create') }}"
                                class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300">Registrar
                                Personal</a>
                            <table class="w-full">
                                <thead>
                                    <tr
                                        class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                                        <th class="px-4 py-3">Id Personal</th>
                                        <th class="px-4 py-3">Nombre Personal</th>
                                        <th class="px-4 py-3">Apellido Personal</th>
                                        <th class="px-4 py-3">C.I.</th>
                                        <th class="px-4 py-3">Fecha Nacimiento</th>
                                        <th class="px-4 py-3">Celular</th>
                                        <th class="px-4 py-3">Genero</th>
                                        <th class="px-4 py-3">Id Rol</th>
                                        <th class="px-4 py-3">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white">
                                    @foreach ($personal as $personal)
                                        <tr class="text-gray-700">
                                            <td class="px-4 py-3 text-ms font-semibold border">
                                                {{ $personal->idpersonal }}
                                            </td>
                                            <td class="px-4 py-3 text-ms font-semibold border">
                                                {{ $personal->nombre_personal }}
                                            </td>
                                            <td class="px-4 py-3 text-ms font-semibold border">
                                                {{ $personal->apellido_personal }}
                                            </td>
                                            <td class="px-4 py-3 text-ms font-semibold border">
                                                {{ $personal->ci }}
                                            </td>
                                            <td class="px-4 py-3 text-ms font-semibold border">
                                                {{ $personal->fecha_nac }}
                                            </td>
                                            <td class="px-4 py-3 text-ms font-semibold border">
                                                {{ $personal->celular }}
                                            </td>
                                            <td class="px-4 py-3 text-ms font-semibold border">
                                                {{ $personal->genero }}
                                            </td>
                                            <td class="px-4 py-3 text-ms font-semibold border">
                                                {{ $personal->idrol }}
                                            </td>


                                            <td class="px-4 py-3 text-ms font-semibold border">
                                                <div>
                                                    <a class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 border-green-300"
                                                        href="{{ route('personal.show', $personal->idpersonal) }}">
                                                        Editar
                                                    </a>
                                                </div>
                                                <br>

                                                <form action="{{ route('personal.destroy', $personal->idpersonal) }}" method="POST">
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
