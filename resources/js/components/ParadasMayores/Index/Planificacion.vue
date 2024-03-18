<template>
    <div class="w-full h-full">
        <div class="m-10 flex space-x-12 justify-center tareas-center">
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
                    <ul class="space-x-10">
                        <a
                            :href="`/pm_planificacion/create/?parada_mayor=${this.paradamayor.id}`"
                            class="bg-[#F57C00] hover:bg-[#F57C00BF] rounded-2xl p-3 text-white font-bold"
                        >
                            Agregar actividad
                        </a>
                        <button
                            disabled
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
                                <th scope="col" class="px-3 py-3">Equipo</th>
                                <th scope="col" class="px-3 py-3">
                                    Materiales
                                </th>
                                <th scope="col" class="px-3 py-3">
                                    Ubicación de Material
                                </th>
                                <th scope="col" class="px-3 py-3">
                                    Inicio Programado
                                </th>
                                <th scope="col" class="px-3 py-3">
                                    Fin Programado
                                </th>
                                <th scope="col" class="px-3 py-3">Opciones</th>
                            </tr>
                        </thead>
                        <tbody class="text-center text-black">
                            <tr
                                v-for="actividad in actividads"
                                :key="actividad.id"
                                class="text-center border-b border-[#0A214033]"
                            >
                                <td>{{ actividad.nombreActividad }}</td>
                                <td>{{ actividad.tareas[0]?.nombreTarea }}</td>
                                <td>
                                    {{ actividad.tareas[0]?.campoRevision }}
                                </td>
                                <td>{{ actividad.tareas[0]?.ordenTrabajo }}</td>
                                <td>{{ actividad.critica }}</td>
                                <td>
                                    {{
                                        actividad.tareas[0]?.personals[0]
                                            .servicioContratado
                                    }}
                                </td>
                                <td>
                                    {{
                                        actividad.tareas[0]?.personals[0]
                                            .nombrePersonal
                                    }}
                                </td>
                                <td>
                                    {{ actividad.equipo }}
                                </td>
                                <td>
                                    {{
                                        actividad.tareas[0]?.materials[0]
                                            .nombreMaterial
                                    }}
                                </td>
                                <td>
                                    {{
                                        actividad.tareas[0]?.materials[0]
                                            .ubicacion
                                    }}
                                </td>
                                <td>{{ actividad.inicioPlan }}</td>
                                <td>{{ actividad.finPlan }}</td>
                                <td>
                                    <button
                                        @click="editarParada(actividad.id)"
                                        class="text-white bg-[#297DE0] hover:bg-[#297DE0CC] rounded-lg px-4 py-2 mx-2"
                                    >
                                        Editar
                                    </button>
                                    <button
                                        @click="
                                            confirmarEliminacion(actividad.id)
                                        "
                                        class="text-white bg-red-500 hover:bg-red-600 rounded-lg px-4 py-2 mx-2"
                                    >
                                        Eliminar
                                    </button>
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
import axios from "axios";

export default {
    data() {
        return {
            // tareas: [],
        };
    },
    mounted() {
        // this.fetchTareas();
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
        // Método para confirmar la eliminación del registro
        confirmarEliminacion(id) {
            if (
                window.confirm(
                    "¿Estás seguro de que deseas eliminar este registro?"
                )
            ) {
                this.eliminarRegistro(id);
                window.location.reload();
            }
        },
        // Método para enviar la solicitud de eliminación al servidor
        eliminarRegistro(id) {
            axios
                .delete("/pm_planificacion/" + id)
                .then((response) => {
                    console.log(response.data);
                })
                .catch((error) => {
                    console.error(error);
                })
                .finally(() => {
                    window.location.href = "/pm_planificacion/" + id + "/edit";
                });
        },
        editarParada(id) {
            window.location.href = "/pm_planificacion/" + id + "/edit";
        },
    },

    props: ["actividads", "paradamayor"],
};
</script>
