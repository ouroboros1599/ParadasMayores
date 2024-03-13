<template>
    <div class="w-full h-full">
        <div class="m-10 flex space-x-12 justify-center items-center">
            <div class="flex-1">
                <div class="w-full bg-gray-200 rounded-full dark:bg-gray-300">
                    <div
                        class="bg-slate-800 text-xs font-medium text-blue-100 text-center p-2 leading-none rounded-full"
                        style="width: 80%"
                    >
                        % OT Liberadas
                    </div>
                </div>
            </div>
            <div class="flex-1">
                <div class="w-full bg-gray-200 rounded-full dark:bg-gray-300">
                    <div
                        class="bg-slate-800 text-xs font-medium text-blue-100 text-center p-2 leading-none rounded-full"
                        style="width: 80%"
                    >
                        % Materiales Disponibles
                    </div>
                </div>
            </div>
            <div class="flex-1">
                <div class="w-full bg-gray-200 rounded-full dark:bg-gray-300">
                    <div
                        class="bg-slate-800 text-xs font-medium text-blue-100 text-center p-2 leading-none rounded-full"
                        style="width: 80%"
                    >
                        % Servicios Disponibles
                    </div>
                </div>
            </div>

            <div>
                <div class="flex-1">
                    <ul class="m-10 space-x-10">
                        <button
                            onclick="location.href='pm_planificacion/create'"
                            class="bg-[#F57C00] hover:bg-[#F57C00BF] rounded-2xl p-3 text-white font-bold"
                        >
                            Añadir actividad
                        </button>
                        <button
                            class="bg-[#F57C00] hover:bg-[#F57C00BF] rounded-2xl p-3 text-white font-bold"
                        >
                            Guardar
                        </button>
                        <button
                            class="bg-[#F57C00] hover:bg-[#F57C00BF] rounded-2xl p-3 text-white font-bold"
                        >
                            Importar
                        </button>
                    </ul>
                </div>
            </div>

            <div class="flex-1">
                <form>
                    <label
                        for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only"
                        >Buscar</label
                    >
                    <div class="relative">
                        <div
                            class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none"
                        >
                            <svg
                                class="w-4 h-4 text-gray-500"
                                aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    stroke="currentColor"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"
                                />
                            </svg>
                        </div>
                        <input
                            type="search"
                            id="default-search"
                            class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Buscar"
                        />
                        <button
                            type="submit"
                            class="text-white absolute right-2.5 bottom-2.5 bg-[#F57C00] hover:bg-[#F57C00BF] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2"
                        >
                            Buscar
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="m-10 flex">
            <div class="flex-1">
                <div
                    class="relative overflow-x-auto shadow-md sm:rounded-lg overflow-y-scroll"
                >
                    <table
                        class="w-full text-sm text-left rtl:text-right text-blue-100 table-auto"
                    >
                        <thead
                            class="text-xs text-center font-semibold text-white uppercase bg-[#F57C00] dark:text-white"
                        >
                            <tr>
                                <th scope="col" class="px-3 py-3">
                                    Actividades
                                </th>
                                <th scope="col" class="px-3 py-3 w-4/12">
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
                                <th scope="col" class="px-3 py-3">Encargado</th>
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
                            <tr
                                v-for="(item, index) in tareas"
                                :key="index"
                                class="text-center border-b border-[#0A214033]"
                            >
                                <td>{{ item.actividad.nombreActividad }}</td>
                                <td>{{ item.nombreTarea }}</td>
                                <td>{{ item.campoRevision }}</td>
                                <td>{{ item.ordenTrabajo }}</td>
                                <td>{{ item.actividad.critica }}</td>
                                <td>{{ item.personal.servicioContratado }}</td>
                                <td>{{ item.personal.nombrePersonal }}</td>
                                <td>{{ item.material.nombreMaterial }}</td>
                                <td>{{ item.material.ubicacion }}</td>
                                <td>{{ item.actividad.inicioPlan }}</td>
                                <td>{{ item.actividad.finPlan }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            tareas: [],
        };
    },
    mounted() {
        this.fetchTareas();
    },
    methods: {
        fetchTareas() {
            axios
                .get("pm_planificacion")
                .then((response) => {
                    this.tareas = response.data;
                })
                .catch((error) => {
                    console.error("Error al recuperar los datos", error);
                });
        },
    },

    props: ["tareas"],
};
</script>
