<template>
    <div
        class="m-10 flex basis-3/4 w-full text-sm text-left justify-center font-semibold"
    >
        <form>
            <input type="hidden" name="paradaMayorId" value="{{ $paradaMayor->id }}">
            <div class="py-2">
                <label for="nombreActividad">Actividad:</label>
                <input
                    class="border border-gray-300 rounded-sm px-3 py-2 w-full"
                    v-model="nombreActividad"
                    type="text"
                    placeholder="Actividad"
                    id="nombreActividad"
                />
            </div>
            <div class="py-2">
                <label for="nombreTarea">Tareas:</label>
                <input
                    class="border border-gray-300 rounded-sm px-3 py-2 w-full"
                    v-model="nombreTarea"
                    type="text"
                    placeholder="Tarea"
                    id="nombreTarea"
                />
            </div>
            <div class="py-2">
                <label for="campoRevision">Campo Revisión:</label>
                <input
                    class="border border-gray-300 rounded-sm px-3 py-2 w-full"
                    v-model="campoRevision"
                    type="text"
                    placeholder="CR-1"
                    id="campoRevision"
                />
            </div>
            <div class="py-2">
                <label for="ordenTrabajo">Orden de Trabajo:</label>
                <input
                    class="border border-gray-300 rounded-sm px-3 py-2 w-full"
                    v-model="ordenTrabajo"
                    type="text"
                    placeholder="OT-1"
                    id="ordenTrabajo"
                />
            </div>
            <div class="py-2">
                <label for="critica">Critica:</label>
                <input
                    class="border border-gray-300 rounded-sm px-3 py-2 w-full"
                    v-model="critica"
                    type="checkbox"
                    placeholder="Critica"
                    id="critica"
                />
            </div>
            <div class="py-2">
                <label for="servicioContratado">Servicio Contratado:</label>
                <input
                    class="border border-gray-300 rounded-sm px-3 py-2 w-full"
                    v-model="servicioContratado"
                    type="text"
                    placeholder="Servicio Contratado"
                    id="servicioContratado"
                />
            </div>
            <div class="py-2">
                <label for="nombrePersonal">Encargado:</label>
                <input
                    class="border border-gray-300 rounded-sm px-3 py-2 w-full"
                    v-model="nombrePersonal"
                    type="text"
                    placeholder="Encargado"
                    id="nombrePersonal"
                />
            </div>
            <div class="py-2">
                <label for="nombreMaterial">Material :</label>
                <input
                    class="border border-gray-300 rounded-sm px-3 py-2 w-full"
                    v-model="nombreMaterial"
                    type="text"
                    placeholder="Material"
                    id="nombreMaterial"
                />
            </div>
            <div class="py-2">
                <label for="cantidadMaterialRequerida">Cantidad material requerido:</label>
                <input
                    class="border border-gray-300 rounded-sm px-3 py-2 w-full"
                    v-model="cantidadMaterialRequerida"
                    type="text"
                    placeholder="Cantidad material requerido"
                    id="cantidadMaterialRequerida"
                />
            </div>
            <div class="py-2">
                <label for="ubicacion">Ubicación del Material :</label>
                <input
                    class="border border-gray-300 rounded-sm px-3 py-2 w-full"
                    v-model="ubicacion"
                    type="text"
                    placeholder="Ubicación del material"
                    id="ubicacion"
                />
            </div>
            <div class="py-2">
                <label for="inicioPlan">Inicio Programado :</label>
                <input
                    class="border border-gray-300 rounded-sm px-3 py-2 w-full"
                    v-model="inicioPlan"
                    type="datetime-local"
                    id="inicioPlan"
                />
            </div>
            <div class="py-2">
                <label for="finPlan">Final Programado :</label>
                <input
                    class="border border-gray-300 rounded-sm px-3 py-2 w-full"
                    v-model="finPlan"
                    type="datetime-local"
                    id="finPlan"
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
        </form>
    </div>
</template>

<script>
import axios from "axios";
export default {
    data() {
        return {
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
            finPlan:"",

        };
    },
    methods: {
        MayuscDataConvert() {
            this.nombreActividad = this.nombreActividad.toUpperCase();
            this.nombreTarea = this.nombreTarea.toUpperCase();
            this.campoRevision = this.campoRevision.toUpperCase();
            this.ordenTrabajo = this.ordenTrabajo.toUpperCase();
            this.servicioContratado = this.servicioContratado.toUpperCase();
            this.nombrePersonal = this.nombrePersonal.toUpperCase();
            this.nombreMaterial = this.nombreMaterial.toUpperCase();
            this.ubicacion = this.ubicacion.toUpperCase();
        },
        submitForm(event) {
            event.preventDefault();
            this.MayuscDataConvert();
            axios
                .post("/pm_planificacion", {
                    nombreActividad: this.nombreActividad,
                    nombreTarea: this.nombreTarea,
                    campoRevision: this.campoRevision,
                    ordenTrabajo: this.ordenTrabajo,
                    critica: this.critica,
                    servicioContratado: this.servicioContratado,
                    nombrePersonal: this.nombrePersonal,
                    nombreMaterial: this.nombreMaterial,
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
                });
        },
    },
};
</script>
