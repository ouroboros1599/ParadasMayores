<template>
    <div class="w-full h-full ">
        <div class="m-10 flex space-x-12 justify-center items-center">

            <div class="flex-1">
                <div class="w-full bg-gray-200 rounded-full dark:bg-gray-300">
                    <div class="bg-slate-800 text-xs font-medium text-blue-100 text-center p-2 leading-none rounded-full"
                        style="width: 80%">
                        % OT Liberadas
                    </div>
                </div>
            </div>
            <div class="flex-1">
                <div class="w-full bg-gray-200 rounded-full dark:bg-gray-300">
                    <div class="bg-slate-800 text-xs font-medium text-blue-100 text-center p-2 leading-none rounded-full"
                        style="width: 80%">
                        % Materiales Disponibles
                    </div>
                </div>
            </div>

            <div>
                <div class="flex-1">
                    <ul class="m-10 space-x-10">
                            <button class="bg-blue-800 hover:bg-blue-600 rounded-2xl p-3 text-white font-bold">Guardar</button>
                            <button class="bg-blue-800 hover:bg-blue-600 rounded-2xl p-3 text-white font-bold">Importar</button>
                    </ul>
                </div>
            </div>
            
            <div class="flex-1">
                <form>
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only ">Buscar</label>
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
                            class="text-white absolute right-2.5 bottom-2.5 bg-blue-800 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Buscar</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="m-10 flex">
            <div class="flex-1">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-blue-100 dark:text-blue-100">
                        <thead class="text-xs text-white uppercase bg-[#233385] dark:text-white text-center">
                            <tr>
                                <th scope="col" class="px-3 py-3">
                                    Actividades
                                </th>
                                <th scope="col" class="px-3 py-3">
                                    Campo de Revisión
                                </th>
                                <th scope="col" class="px-3 py-3">
                                    Orden Trabajo
                                </th>
                                <th scope="col" class="px-3 py-3">
                                    Actividad Critica
                                </th>
                                <th scope="col" class="px-3 py-3">
                                    Encargado
                                </th>
                                <th scope="col" class="px-3 py-3">
                                    Materiales
                                </th>
                                <th scope="col" class="px-3 py-3">
                                    Ubicacion de Material
                                </th>
                                <th scope="col" class="px-3 py-3">
                                    Materiales Disponibles
                                </th>
                                <th scope="col" class="px-3 py-3">
                                    Inicio Programado
                                </th>
                                <th scope="col" class="px-3 py-3">
                                    Fin Programado
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr class="bg-[#2f55e1] border-b border-blue-400">
                                <th scope="row"
                                    class="px-3 py-4 font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">Actividad 1
                                </th>
                                <td class="px-3 py-4">CR-1
                                </td>
                                <td class="px-3 py-4">OT-1
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">Jesús Castillo
                                </td>
                                <td class="px-3 py-4">1 Foco
                                </td>
                                <td class="px-3 py-4">Bodega
                                </td>
                                <td class="px-3 py-4">1
                                </td>
                                <td class="px-3 py-4">10/02/2024 09:30
                                </td>
                                <td class="px-3 py-4">10/02/2024 10:0
                                </td>
                            </tr>
                            <tr class="bg-[#2f55e1] border-b border-blue-400">
                                <th scope="row"
                                    class="px-3 py-4 font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">Actividad 2
                                </th>
                                <td class="px-3 py-4">CR-1
                                </td>
                                <td class="px-3 py-4">OT-1
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">Jesús Castillo
                                </td>
                                <td class="px-3 py-4">1 Foco
                                </td>
                                <td class="px-3 py-4">Bodega
                                </td>
                                <td class="px-3 py-4">1
                                </td>
                                <td class="px-3 py-4">10/02/2024 09:30
                                </td>
                                <td class="px-3 py-4">10/02/2024 10:0
                                </td>
                            </tr>
                            <tr class="bg-[#2f55e1] border-b border-blue-400">
                                <th scope="row"
                                    class="px-3 py-4 font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">Actividad 3
                                </th>
                                <td class="px-3 py-4">CR-1
                                </td>
                                <td class="px-3 py-4">OT-1
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">Jesús Castillo
                                </td>
                                <td class="px-3 py-4">1 Foco
                                </td>
                                <td class="px-3 py-4">Bodega
                                </td>
                                <td class="px-3 py-4">1
                                </td>
                                <td class="px-3 py-4">10/02/2024 09:30
                                </td>
                                <td class="px-3 py-4">10/02/2024 10:0
                                </td>
                            </tr>
                            <tr class="bg-[#2f55e1] border-b border-blue-400">
                                <th scope="row"
                                    class="px-3 py-4 font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">Actividad 4
                                </th>
                                <td class="px-3 py-4">CR-1
                                </td>
                                <td class="px-3 py-4">OT-1
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">Jesús Castillo
                                </td>
                                <td class="px-3 py-4">1 Foco
                                </td>
                                <td class="px-3 py-4">Bodega
                                </td>
                                <td class="px-3 py-4">1
                                </td>
                                <td class="px-3 py-4">10/02/2024 09:30
                                </td>
                                <td class="px-3 py-4">10/02/2024 10:0
                                </td>
                            </tr>
                            <tr class="bg-[#2f55e1] border-b border-blue-400">
                                <th scope="row"
                                    class="px-3 py-4 font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">Actividad 5
                                </th>
                                <td class="px-3 py-4">CR-1
                                </td>
                                <td class="px-3 py-4">OT-1
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">Jesús Castillo
                                </td>
                                <td class="px-3 py-4">1 Foco
                                </td>
                                <td class="px-3 py-4">Bodega
                                </td>
                                <td class="px-3 py-4">1
                                </td>
                                <td class="px-3 py-4">10/02/2024 09:30
                                </td>
                                <td class="px-3 py-4">10/02/2024 10:0
                                </td>
                            </tr>
                            <tr class="bg-[#2f55e1] border-b border-blue-400">
                                <th scope="row"
                                    class="px-3 py-4 font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">Actividad 6
                                </th>
                                <td class="px-3 py-4">CR-1
                                </td>
                                <td class="px-3 py-4">OT-1
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">Jesús Castillo
                                </td>
                                <td class="px-3 py-4">1 Foco
                                </td>
                                <td class="px-3 py-4">Bodega
                                </td>
                                <td class="px-3 py-4">1
                                </td>
                                <td class="px-3 py-4">10/02/2024 09:30
                                </td>
                                <td class="px-3 py-4">10/02/2024 10:0
                                </td>
                            </tr>
                            <tr class="bg-[#2f55e1] border-b border-blue-400 ">
                                <th scope="row"
                                    class="px-3 py-4 font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">Actividad 7
                                </th>
                                <td class="px-3 py-4">CR-1
                                </td>
                                <td class="px-3 py-4">OT-1
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">Jesús Castillo
                                </td>
                                <td class="px-3 py-4">1 Foco
                                </td>
                                <td class="px-3 py-4">Bodega
                                </td>
                                <td class="px-3 py-4">1
                                </td>
                                <td class="px-3 py-4">10/02/2024 09:30
                                </td>
                                <td class="px-3 py-4">10/02/2024 10:0
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>  
        </div>
    </div>
</template>

<script>
    export default{};
</script>