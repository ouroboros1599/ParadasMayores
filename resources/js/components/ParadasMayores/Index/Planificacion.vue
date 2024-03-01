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
            <div class="flex-1">
                <div class="w-full bg-gray-200 rounded-full dark:bg-gray-300">
                    <div class="bg-slate-800 text-xs font-medium text-blue-100 text-center p-2 leading-none rounded-full"
                        style="width: 80%">
                        % Servicios Disponibles
                    </div>
                </div>
            </div>

            <div>
                <div class="flex-1">
                    <ul class="m-10 space-x-10">
                        <button onclick="location.href='pm_planificacion/create'" class="bg-[#F57C00] hover:bg-[#F57C00BF] rounded-2xl p-3 text-white font-bold">Añadir actividad</button>
                        <button class="bg-[#F57C00] hover:bg-[#F57C00BF] rounded-2xl p-3 text-white font-bold">Guardar</button>
                        <button class="bg-[#F57C00] hover:bg-[#F57C00BF] rounded-2xl p-3 text-white font-bold">Importar</button> 
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
                            placeholder="Buscar">
                        <button type="submit"
                            class="text-white absolute right-2.5 bottom-2.5 bg-[#F57C00] hover:bg-[#F57C00BF] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Buscar</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="m-10 flex">
            <div class="flex-1">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-blue-100">
                        <thead class="text-xs text-center font-semibold text-white uppercase bg-[#F57C00] dark:text-white">
                            <tr>
                                <th scope="col" class="px-3 py-3">
                                    Actividades
                                </th>
                                <th scope="col" class="px-3 py-3">
                                    Tareas
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
                                    Servicio Contratado
                                </th>
                                <th scope="col" class="px-3 py-3">
                                    Encargado
                                </th>
                                <th scope="col" class="px-3 py-3">
                                    Materiales
                                </th>
                                <th scope="col" class="px-3 py-3">
                                    Ubicación de Material
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
                        <tbody class="text-center text-black">
                            <tr class="text-center border-b border-[#0A214033]">
                                <th scope="row"
                                    class="px-3 py-4 font-medium whitespace-nowrap text-left ">Actividades preliminares
                                </th>
                                <td class="px-3 py-4 text-left">
                                    <li class="list-none">Instalación de barreras duras para operaciones de limpieza espesador R5</li>
                                    <li class="list-none">Instalación de faena</li>
                                    <li class="list-none">Instalación de generadores, baños quimicos, torres de iluminación</li>
                                    <li class="list-none">Traslado de drive</li>
                                    <li class="list-none">Retiro reductor primero drive</li>
                                    <li class="list-none">Traslado de rastras</li>
                                    <li class="list-none">Instalación de blades</li>
                                    <li class="list-none">Inspección reductor primario</li>
                                </td>
                                <td class="px-3 py-4">CR-1
                                </td>
                                <td class="px-3 py-4">OT-1
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">No aplica
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
                                <td class="px-3 py-4">10/02/2024 10:00
                                </td>
                            </tr>
                            <tr class="text-center border-b border-[#0A214033]">
                                <th scope="row"
                                    class="px-3 py-4 font-medium whitespace-nowrap text-left ">Cambio de Sistema Motriz y MTTO Sistema de Levante
                                </th>
                                <td class="px-3 py-4 text-left">
                                    <li class="list-none">Desconexionado fuerza y control drive existente</li>
                                    <li class="list-none">Ingreso y armado de alzaprima megashor</li>
                                    <li class="list-none">Armado de andamios para desconexionado eléctrico y refuerzo de caseta</li>
                                    <li class="list-none">Modificacion de andamios para retiro de techo de caseta</li>
                                    <li class="list-none">Retiro de techo de caseta</li>
                                    <li class="list-none">Retiro de tableros, CCM y componentes</li>
                                    <li class="list-none">Armado y Modificación de andamios para refuerzo de megaestructura y caseta</li>
                                    <li class="list-none">Refuerzo de megaestructura y caseta</li>
                                </td>
                                <td class="px-3 py-4">CR-1
                                </td>
                                <td class="px-3 py-4">OT-1
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">No aplica
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
                                <td class="px-3 py-4">10/02/2024 10:00
                                </td>
                            </tr>
                            <tr class="text-center border-b border-[#0A214033]">
                                <th scope="row"
                                    class="px-3 py-4 font-medium whitespace-nowrap text-left ">Cambio de Estructura Sumergida
                                </th>
                                <td class="px-3 py-4 text-left">
                                    <li class="list-none">Dimensionado de rastras para posterior traslado a patio de rises</li>
                                    <li class="list-none">Armado de andamios para desconexión jaula - drive</li>
                                    <li class="list-none">Afinar conjunto jaula - rastras Durmientas, cilindros hidraulicos</li>
                                    <li class="list-none">Instalación de blades</li>
                                    <li class="list-none">Desmontaje y retiro de tastras largas</li>
                                    <li class="list-none">Retiro de andamios</li>
                                    <li class="list-none">Desmontaje y retiro de scrappers</li>
                                    <li class="list-none">Desmontaje y retiro ded jaula saliente</li>
                                </td>
                                <td class="px-3 py-4">CR-1
                                </td>
                                <td class="px-3 py-4">OT-1
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">No aplica
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
                                <td class="px-3 py-4">10/02/2024 10:00
                                </td>
                            </tr>
                            <tr class="text-center border-b border-[#0A214033]">
                                <th scope="row"
                                    class="px-3 py-4 font-medium whitespace-nowrap text-left ">Mantenimiento de Sistema de Alimentación
                                </th>
                                <td class="px-3 py-4 text-left">
                                    <li class="list-none">Cambio de canaleta de alimentación</li>
                                    <li class="list-none">Inspección y reparación de revestimiento cajón de alimentación</li>
                                    <li class="list-none">Armado de andamios para trabajos en sistema de alimentación</li>
                                    <li class="list-none">Cambio de cañeria 24" de alimentación</li>
                                    <li class="list-none">Cambio de manga válvula 24" de alimentación</li>
                                    <li class="list-none">Reparación y montaje de dropbox y jet descarga</li>
                                    <li class="list-none">Reparación de feedwell</li>
                                </td>
                                <td class="px-3 py-4">CR-1
                                </td>
                                <td class="px-3 py-4">OT-1
                                </td>
                                <td class="px-3 py-4">-
                                </td>
                                <td class="px-3 py-4">No aplica
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
                                <td class="px-3 py-4">10/02/2024 10:00
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
import BarChart_Planificacion from '../../charts/BarChart_Planificacion.vue';

    export default{ components: { BarChart_Planificacion } };
</script>