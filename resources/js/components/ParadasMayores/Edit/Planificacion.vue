<template>
    <div
        class="m-10 flex basis-3/4 w-full text-sm text-left justify-center font-semibold"
    >
        <div class="col-auto">
            <input type="hidden" :value="parada_mayor" />
            <div class="py-2">
                <label for="nombreActividad">Actividad:</label>
                <input
                    class="border border-gray-300 rounded-sm px-3 py-2 w-full"
                    v-model="nombreActividad"
                    type="text"
                    placeholder="Actividad"
                />
            </div>
            <div class="py-2">
                <label for="nombreTarea">Tareas:</label>
                <input
                    class="border border-gray-300 rounded-sm px-3 py-2 w-full"
                    v-model="nombreTarea"
                    type="text"
                    placeholder="Tarea"
                />
            </div>
            <div class="py-2">
                <label for="campoRevision">Campo Revisión:</label>
                <input
                    class="border border-gray-300 rounded-sm px-3 py-2 w-full"
                    v-model="campoRevision"
                    type="text"
                    placeholder="CR-1"
                />
            </div>
            <div class="py-2">
                <label for="ordenTrabajo">Orden de Trabajo:</label>
                <input
                    class="border border-gray-300 rounded-sm px-3 py-2 w-full"
                    v-model="ordenTrabajo"
                    type="text"
                    placeholder="OT-1"
                />
            </div>
            <div class="py-2">
                <label for="critica">Critica:</label>
                <input
                    class="border border-gray-300 rounded-sm px-3 py-2 w-full"
                    v-model="critica"
                    type="checkbox"
                    placeholder="Critica"
                />
            </div>
            <div class="py-2">
                <label for="servicioContratado">Servicio Contratado:</label>
                <input
                    class="border border-gray-300 rounded-sm px-3 py-2 w-full"
                    v-model="servicioContratado"
                    type="text"
                    placeholder="Servicio Contratado"
                />
            </div>
            <div class="py-2">
                <label for="nombrePersonal">Encargado:</label>
                <input
                    class="border border-gray-300 rounded-sm px-3 py-2 w-full"
                    v-model="nombrePersonal"
                    type="text"
                    placeholder="Encargado"
                />
            </div>
            <div class="py-2">
                <label for="nombreMaterial">Material :</label>
                <input
                    class="border border-gray-300 rounded-sm px-3 py-2 w-full"
                    v-model="nombreMaterial"
                    type="text"
                    placeholder="Material"
                />
            </div>
            <div class="py-2">
                <label for="cantidadMaterialRequerida"
                    >Cantidad material requerido:</label
                >
                <input
                    class="border border-gray-300 rounded-sm px-3 py-2 w-full"
                    v-model="cantidadMaterialRequerida"
                    type="text"
                    placeholder="Cantidad material requerido"
                />
            </div>
            <div class="py-2">
                <label for="ubicacion">Ubicación del Material :</label>
                <input
                    class="border border-gray-300 rounded-sm px-3 py-2 w-full"
                    v-model="ubicacion"
                    type="text"
                    placeholder="Ubicación del material"
                />
            </div>
            <div class="py-2">
                <label for="inicioPlan">Inicio Programado :</label>
                <input
                    class="border border-gray-300 rounded-sm px-3 py-2 w-full"
                    v-model="inicioPlan"
                    type="datetime-local"
                />
            </div>
            <div class="py-2">
                <label for="finPlan">Final Programado :</label>
                <input
                    class="border border-gray-300 rounded-sm px-3 py-2 w-full"
                    v-model="finPlan"
                    type="datetime-local"
                />
            </div>
            <div class="flex justify-center py-2">
                <button
                    @click.prevent="submitForm"
                    class="text-white bg-[#F57C00] hover:bg-[#F57C00BF] rounded-lg text-sm px-4 py-2"
                >
                    Actualizar
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
            // // // // paradaMayorId: "",
            nombreActividad: "",
            nombreTarea: "",
            campoRevision: "",
            ordenTrabajo: "",
            critica: "",
            servicioContratado: "",
            nombrePersonal: "",
            nombreMaterial: "",
            ubicacion: "",
            cantidadMaterialRequerida: "",
            inicioPlan: "",
            finPlan: "",
        };
    },
    mounted() {
        this.fetchDatosRegistro();
    },
    methods: {
        fetchDatosRegistro() {
            axios
                .get("/pm_planificacion/" + this.actividads.id)
                .then((response) => {
                    console.log(response);
                    const datos = response.data;
                    this.nombreActividad = datos.nombreActividad;
                    this.nombreTarea = datos.tareas.nombreTarea;
                    this.campoRevision = datos.tareas.campoRevision;
                    this.ordenTrabajo = datos.tareas.ordenTrabajo;
                    this.critica = datos.critica;
                    this.servicioContratado =
                        datos.tareas.personals.servicioContratado;
                    this.nombrePersonal = datos.tareas.personals.nombrePersonal;
                    this.nombreMaterial = datos.tareas.materials.nombreMaterial;
                    this.ubicacion = datos.tareas.materials.ubicacion;
                    this.cantidadMaterialRequerida =
                        datos.tareas.cantidadMaterialRequerida;
                    this.inicioPlan = datos.inicioPlan;
                    this.finPlan = datos.finPlan;
                })
                .catch((error) => {
                    console.error(
                        "error al obtener los datos del registro.",
                        error
                    );
                });
        },
        submitForm() {
            axios
                .put("/pm_planificacion/" + this.actividad.id, {
                    paradaMayorId: this.parada_mayor,
                    nombreActividad: this.nombreActividad,
                    nombreTarea: this.nombreTarea,
                    campoRevision: this.campoRevision,
                    ordenTrabajo: this.ordenTrabajo,
                    critica: this.critica,
                    servicioContratado: this.servicioContratado,
                    nombrePersonal: this.nombrePersonal,
                    nombreMaterial: this.nombreMaterial,
                    equipo: this.equipo,
                    ubicacion: this.ubicacion,
                    cantidadMaterialRequerida: this.cantidadMaterialRequerida,
                    inicioPlan: this.inicioPlan,
                    finPlan: this.finPlan,
                })
                .then((response) => {
                    console.log(response.data);
                })
                .catch((error) => {
                    console.error(error);
                })
                .finally(() => {
                    window.location.href =
                        "/pm_planificacion/" + this.actividad.id;
                });
        },
    },
    props: ["actividads"],
};
</script>
