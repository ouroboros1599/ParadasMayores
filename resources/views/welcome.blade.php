@extends('layout/main')
@section('tituloPagina', 'Ejecución')

@section('contenido')
    @section('encabezado', 'EJECUCIÓN DE PARADAS MAYORES')
    <div class="w-full h-full">
        <div class="m-10 flex space-x-10">
            <div class="flex-1">
                <button class="bg-blue-500 rounded-2xl p-3 text-white">GUARDAR</button>
            </div>
            <div class="flex-1">
                <button class="bg-blue-500 rounded-2xl p-3 text-white">EXPORTAR</button>
            </div>
            <div class="flex-1">
                <button class="bg-blue-500 rounded-2xl p-3 text-white">HALLAZGOS</button>
            </div>
            <div class="flex-1">
                <form>
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only ">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="default-search"
                            class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 "
                            placeholder="Buscar" required>
                        <button type="submit"
                            class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Search</button>
                    </div>
                </form>
            </div>
        </div>


        <div class="m-10 flex space-x-10">
            <div class="bg-slate-100 rounded-2xl flex-1">
                <div style="width: 40%">
                    <canvas id="myPieChart"></canvas>
                </div>
                <div class="h-5">
                    <script src="{{ asset('js/charts/pieChart.js') }}"></script> 
                </div>
            </div>
            

            <div class="bg-slate-100 rounded-2xl  flex-1">
                <div class=" h-96" style="width: 80% ">
                    <canvas class="" id="myLineChart"></canvas>
                </div>
                <div class="h-5">
                    <script src="{{ asset('js/charts/linearChart.js')}}"></script>
                </div>
            </div>
        </div>


        <div class="m-10 flex ">
            <div class="flex-1">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-blue-100 dark:text-blue-100">
                        <thead class="text-xs text-white uppercase bg-blue-600 dark:text-white">
                            <tr>
                                <th scope="col" class="px-3 py-3">
                                    Actividades
                                </th>
                                <th scope="col" class="px-3 py-3">
                                    Criticas
                                </th>
                                <th scope="col" class="px-3 py-3">
                                    Encargado
                                </th>
                                <th scope="col" class="px-3 py-3">
                                    Estado
                                </th>
                                <th scope="col" class="px-3 py-3">
                                    Inicio Programado
                                </th>
                                <th scope="col" class="px-3 py-3">
                                    Fin Programado
                                </th>
                                <th scope="col" class="px-3 py-3">
                                    Inicio Real
                                </th>
                                <th scope="col" class="px-3 py-3">
                                    Fin Real
                                </th>
                                <th scope="col" class="px-3 py-3">
                                    Comentario
                                </th>                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-blue-500 border-b border-blue-400">
                                <th scope="row"
                                    class="px-3 py-4 font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">Actividad 
                                </th>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                
                            </tr>
                            <tr class="bg-blue-500 border-b border-blue-400">
                                <th scope="row"
                                    class="px-3 py-4 font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">Actividad 
                                </th>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                
                            </tr>
                            <tr class="bg-blue-500 border-b border-blue-400">
                                <th scope="row"
                                    class="px-3 py-4 font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">Actividad 
                                </th>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                
                            </tr>
                            <tr class="bg-blue-500 border-b border-blue-400">
                                <th scope="row"
                                    class="px-3 py-4 font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">Actividad 
                                </th>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                
                            </tr>
                            <tr class="bg-blue-500 border-b border-blue-400">
                                <th scope="row"
                                    class="px-3 py-4 font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">Actividad 
                                </th>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                
                            </tr>
                            <tr class="bg-blue-500 border-b border-blue-400">
                                <th scope="row"
                                    class="px-3 py-4 font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">Actividad 
                                </th>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                
                            </tr>
                            <tr class="bg-blue-500 border-b border-blue-400">
                                <th scope="row"
                                    class="px-3 py-4 font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">Actividad 
                                </th>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                
                            </tr>
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
@endsection