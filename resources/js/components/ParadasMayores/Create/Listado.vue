<template>
    <!-- recordar añadir el campo required a cada input -->
    <div class="m-10 flex basis-3/4 w-full text-sm text-left justify-center font-semibold">
        <form @submit.prevent="submitForm" method="post">
            <div class="py-2">
                <label for="nombreEmpresa">Empresa:</label>
                <select v-model="nombreEmpresa" class="border border-gray-300 rounded-sm px-3 py-2 w-full" name="nombreEmpresa" id="nombreEmpresa">
                <option value="seleccionar">seleccionar una opción</option>
                <option value="CODELCO">CODELCO</option>
                <option value="ENAP">ENAP</option>
                <option value="AMSA">AMSA</option>
                <option value="BHP">BHP</option>
                </select>
            </div>
            <div class="py-2">
                <label for="divisionEmpresa">División:</label>
                <input class="border border-gray-300 rounded-sm px-3 py-2 w-full" v-model="divisionEmpresa" type="text" placeholder="División" id="divisionEmpresa" name="divisionEmpresa">
            </div>
            <div class="py-2"> 
                <label for="nombreParada">Nombre Parada:</label>
                <input class="border border-gray-300 rounded-sm px-3 py-2 w-full" v-model="nombreParada" type="text" placeholder="Nombre Parada" id="nombreParada" name="nombreParada">
            </div>
            <div class="py-2">
                <label for="encargado">Encargado:</label>
                <input class="border border-gray-300 rounded-sm px-3 py-2 w-full" v-model="encargado" type="text" placeholder=" Encargado" id="encargado" name="encargado">
            </div>
            <div class="py-2">
                <label for="estadoParada">Estado:</label>
                <select v-model="estadoParada" class="border border-gray-300 rounded-sm px-3 py-2 w-full" id="estadoParada" name="estadoParada">
                    <option value="seleccionar">seleccionar una opción</option>
                    <option value="Planificado">Planificado</option>
                    <option value="En proceso">En proceso</option>
                    <option value="Completado">Completado</option>
                    <option value="Cancelado">Cancelado</option>
                </select>
            </div>
            <div class="py-2">
                <label for="inicioPlanificado">Inicio Programado:</label>
                <input class="border border-gray-300 rounded-sm px-3 py-2 w-full" v-model="inicioPlanificado" type="datetime-local" id="inicioPlanificado" name="inicioPlanificado">
            </div>
            <div class="py-2">
                <label for="finPlanificado">Fin Programado:</label>
                <input class="border border-gray-300 rounded-sm px-3 py-2 w-full" v-model="finPlanificado" type="datetime-local" id="finPlanificado" name="finPlanificado">
            </div>
            <div class="py-2">
                <label for="inicioReal">Inicio Real:</label>
                <input class="border border-gray-300 rounded-sm px-3 py-2 w-full" v-model="inicioReal" type="datetime-local" id="inicioReal" name="inicioReal">
            </div>
            <div class="py-2">
                <label for="finReal">Fin Real:</label>
                <input class="border border-gray-300 rounded-sm px-3 py-2 w-full" v-model="finReal" type="datetime-local" id="finReal" name="finReal">
            </div>
            <div class="flex justify-center py-2">
                <button  type="submit" class="text-white bg-[#F57C00] hover:bg-[#F57C00BF] rounded-lg text-sm px-4 py-2">Guardar</button>
            </div>
        </form>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            nombreEmpresa: 'seleccionar',
            divisionEmpresa: '',
            nombreParada: '',
            encargado: '',
            estadoParada: 'seleccionar',
            inicioPlanificado: '',
            finPlanificado: '',
            inicioReal: '',
            finReal: ''
        };
    },
    methods: {
        submitForm() {
            axios.post('/pm_listado', {
                nombreEmpresa: this.nombreEmpresa,
                divisionEmpresa: this.divisionEmpresa,
                nombreParada: this.nombreParada,
                encargado: this.encargado,
                estadoParada: this.estadoParada,
                inicioPlanificado: this.inicioPlanificado,
                finPlanificado: this.finPlanificado,
                inicioReal: this.inicioReal,
                finReal: this.finReal
            })
            .then(response => {
                console.log(response.data);
            })
            .catch(error => {
                console.error(error);
            });
        },
        redirectToIndex(){
            // this.$router.push('/pm_listado.index');
        }

    }
};
</script>
