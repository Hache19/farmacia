<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Venta
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="max-w-lg mx-auto">

                    <div class="bg-blue w-full p-8 flex justify-center font-sans">

                        <div class="text-sm mt-2">
                            <div
                                class="bg-white p-2 rounded mt-1 border-b border-grey cursor-pointer hover:bg-grey-lighter">
                                fecha Venta: {{$venta->fecha_venta}}
                            </div>
                            <div
                                class="bg-white p-2 rounded mt-1 border-b border-grey cursor-pointer hover:bg-grey-lighter">
                                total venta: {{$venta->total_venta}}
                            </div>
                            <div
                                class="bg-white p-2 rounded mt-1 border-b border-grey cursor-pointer hover:bg-grey-lighter">
                                idcliente: {{$venta->idcliente}}
                            </div>
                            <div
                                class="bg-white p-2 rounded mt-1 border-b border-grey cursor-pointer hover:bg-grey-lighter">
                                idpersonal: {{$venta->idpersonal}}
                            </div>
                            
                            
                        </div>

                    </div>
                </div>
            </div>
            <a href="{{ route('venta.index') }}"
                class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300">
                Volver
            </a>
            <a href="{{ route('venta.edit',$venta) }}"
                class="p-2 pl-5 pr-5 bg-blue-500 text-gray-100 text-lg rounded-lg focus:border-4 border-blue-300">
                Editar
            </a>
        </div>
</x-app-layout>