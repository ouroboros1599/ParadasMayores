<template>
    <!-- recordar añadir el campo required a cada input -->
    <div
        class="m-10 flex basis-3/4 w-full text-sm text-left justify-center font-semibold"
    >
        <div class="col-auto">
            <div class="py-2">
                <label for="nombreEmpresa">Empresa:</label>
                <select
                    v-model="nombreEmpresa"
                    class="border border-gray-300 rounded-sm px-3 py-2 w-full"
                >
                    <option value="SELECCIONAR" disabled>seleccionar una opción</option>
                    <option value="AGUASANDINAS">AGUAS ANDINAS</option>
                    <option value="ALBEMARLE">ALBEMARLE</option>
                    <option value="AMSA">AMSA</option>
                    <option value="BHP">BHP</option>
                    <option value="CMP">CMP</option>
                    <option value="CODELCO">CODELCO</option>
                    <option value="ENAP">ENAP</option>
                    <option value="FIORDOAUSTRAL">FIORDO AUSTRAL</option>
                    <option value="KINROSS">KINROSS</option>
                    <option value="LOMASBAYAS">LOMAS BAYAS</option>
                    <option value="TECK">TECK</option>
                </select>
            </div>
            <div class="py-2">
                <label for="divisionEmpresa">División:</label>
                <input
                    class="border border-gray-300 rounded-sm px-3 py-2 w-full"
                    v-model="divisionEmpresa"
                    type="text"
                    placeholder="División"
                />
            </div>
            <div class="py-2">
                <label for="nombreParada">Nombre Parada:</label>
                <input
                    class="border border-gray-300 rounded-sm px-3 py-2 w-full"
                    v-model="nombreParada"
                    type="text"
                    placeholder="Nombre Parada"
                />
            </div>
            <div class="py-2">
                <label for="encargadoParada">Encargado:</label>
                <input
                    class="border border-gray-300 rounded-sm px-3 py-2 w-full"
                    v-model="encargadoParada"
                    type="text"
                    placeholder="Encargado"
                />
            </div>
            <div class="py-2">
                <label for="estadoParada">Estado:</label>
                <select
                    v-model="estadoParada"
                    class="border border-gray-300 rounded-sm px-3 py-2 w-full"
                >
                    <option value="SELECCIONAR" disabled>seleccionar una opción</option>
                    <option value="EJECUCION">EN EJECUCIÓN</option>
                    <option value="TERMINADA">TERMINADA</option>
                    <option value="CANCELADA">CANCELADA</option>
                    <option value="REPROGRAMADA">REPROGRAMADA</option>
                    <option value="NOINICIADA">NO INICIADA</option>
                    <option value="PROGRAMADA">PROGRAMADA</option>
                </select>
            </div>
            <div class="py-2">
                <label for="inicioPlanificado">Inicio Programado:</label>
                <input
                    class="border border-gray-300 rounded-sm px-3 py-2 w-full"
                    v-model="inicioPlanificado"
                    type="datetime-local"
                />
            </div>
            <div class="py-2">
                <label for="finPlanificado">Fin Programado:</label>
                <input
                    class="border border-gray-300 rounded-sm px-3 py-2 w-full"
                    v-model="finPlanificado"
                    type="datetime-local"
                />
            </div>

            <div class="flex justify-center py-2">
                <button
                    @click="submitForm"
                    class="text-white bg-[#F57C00] hover:bg-[#F57C00BF] rounded-lg text-sm px-4 py-2"
                >
                    Guardar
                </button>
            </div>
        </div>
    </div>
</template>

<script>
import axios from "axios";

export default {
    data() {
        return {
            nombreEmpresa: "SELECCIONAR",
            divisionEmpresa: "",
            nombreParada: "",
            encargadoParada: "",
            estadoParada: "SELECCIONAR",
            inicioPlanificado: "",
            finPlanificado: "",
        };
    },
    mounted() {
        this.fetchDatosRegistro();
    },
    methods: {
        fetchDatosRegistro() {
            axios
                .get("/pm_listado/" + this.paradamayor.id)
                .then((response) => {
                    console.log(response);
                    const datos = response.data;
                    this.nombreEmpresa = datos.empresa.nombreEmpresa;
                    this.divisionEmpresa = datos.empresa.divisionEmpresa;
                    this.nombreParada = datos.nombreParada;
                    this.encargadoParada = datos.encargadoParada;
                    this.estadoParada = datos.estadoParada;
                    this.inicioPlanificado = datos.inicioPlanificado;
                    this.finPlanificado = datos.finPlanificado;
                })
                .catch((error) => {
                    console.error(
                        "Error al obtener los datos del registro:",
                        error
                    );
                });
        },
        submitForm() {
            axios
                .put("/pm_listado/" + this.paradamayor.id, {
                    nombreEmpresa: this.nombreEmpresa,
                    divisionEmpresa: this.divisionEmpresa,
                    nombreParada: this.nombreParada,
                    encargadoParada: this.encargadoParada,
                    estadoParada: this.estadoParada,
                    inicioPlanificado: this.inicioPlanificado,
                    finPlanificado: this.finPlanificado,
                })
                .then((response) => {
                    console.log(response.data);
                })
                .catch((error) => {
                    console.error(error);
                })
                .finally(() => {
                    window.location.href = "/pm_listado/";
                });
        },
    },
    props: ["paradamayor"],
};
</script>
