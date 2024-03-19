<template>
    <div class="w-full h-full">
        <div class="m-10 flex space-x-10">
            <div class="flex-1 text-right space-x-10">
                <button
                    class="bg-[#F57C00] hover:bg-[#F57C00BF] rounded-2xl p-3 text-white font-bold"
                >
                    Guardar cambios
                </button>
                <button
                    class="bg-[#F57C00] hover:bg-[#F57C00BF] rounded-2xl p-3 text-white font-bold"
                >
                    Exportar
                </button>
                <button
                    class="bg-[#F57C00] hover:bg-[#F57C00BF] rounded-2xl p-3 text-white font-bold"
                >
                    Hallazgos
                </button>
            </div>
            <div class="flex-1">
                <form>
                    <label
                        for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only"
                        >Search</label
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

        <div class="flex m-10 space-x-10">
            <div class="bg-slate-100 rounded-2xl flex-1">
                <PieChart_Ejecucion></PieChart_Ejecucion>
            </div>

            <div class="bg-slate-100 rounded-2xl flex-1">
                <LineChart_Ejecucion></LineChart_Ejecucion>
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
                                <th scope="col" class="px-3 py-3 w-full">
                                    Tareas
                                </th>
                                <th scope="col" class="px-3 py-3">
                                    Actividad Critica
                                </th>
                                <th scope="col" class="px-3 py-3">Encargado</th>
                                <th scope="col" class="px-3 py-3">Equipo</th>
                                <th scope="col" class="px-3 py-3">
                                    Estado Actividad
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
                                <th scope="col" class="px-3 py-3">Fin Real</th>
                                <th scope="col" class="px-3 py-3">
                                    % Avance Planificado
                                </th>
                                <th scope="col" class="px-3 py-3">
                                    % Avance Real
                                </th>
                                <th scope="col" class="px-3 py-3">
                                    Comentario
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-center text-black">
                            <tr
                                v-for="actividad in paradamayor.actividads"
                                :key="actividad.id"
                                class="text-center border-b border-[#0A214033]"
                            >
                                <td>{{ actividad.nombreActividad }}</td>
                                <td>{{ actividad.tareas[0]?.nombreTarea }}</td>
                                <td>{{ actividad.critica ?? '--' }}</td>
                                <td>
                                    {{
                                        actividad.tareas[0]?.personals[0]
                                            ?.nombrePersonal
                                    }}
                                </td>
                                <td>{{ actividad.equipo }}</td>
                                <td>{{ actividad.estadoActividad ?? '--' }}</td>
                                <td>{{ actividad.inicioPlan }}</td>
                                <td>{{ actividad.finPlan }}</td>
                                <td>{{ actividad.inicioReal ?? '--' }}</td>
                                <td>{{ actividad.finReal ?? '--' }}</td>
                                <td>{{ '--' }}</td>
                                <td>{{ '--' }}</td>
                                <td>{{ actividad.comentario ?? '--' }}</td>
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
        return {};
    },
    mounted() {},
    methods: {
        fetchTareas() {
            axios
                .get("pm_planificacion")
                .then((response) => {
                    this.tareas = response.data;
                })
                .catch((error) => {
                    console.error("error al recuperar los datos", error);
                });
        },
    },
    props: ["paradamayor"],
};
</script>
