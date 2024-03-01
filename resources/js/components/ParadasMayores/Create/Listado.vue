<template>
    <!-- recordar añadir el campo required a cada input -->
    <div class="m-10 flex basis-3/4 w-full text-sm text-left justify-center font-semibold">
        <form>
            <div class="py-2">
                <label for="empresa">Empresa:</label>
                <input class="border border-gray-300 rounded-sm px-3 py-2 w-full" v-model="empresa" type="text" placeholder="Empresa" id="empresa" >
            </div>
            <div class="py-2">
                <label for="division">División:</label>
                <input class="border border-gray-300 rounded-sm px-3 py-2 w-full" v-model="division" type="text" placeholder="División" id="division" >
            </div>
            <div class="py-2"> 
                <label for="nombre_parada">Nombre Parada:</label>
                <input class="border border-gray-300 rounded-sm px-3 py-2 w-full" v-model="nombreParada" type="text" placeholder="Nombre Parada" id="nombre_parada" >
            </div>
            <div class="py-2">
                <label for="encargado">Encargado:</label>
                <input class="border border-gray-300 rounded-sm px-3 py-2 w-full" v-model="encargado" type="text" placeholder=" Encargado" id="encargado" >
            </div>
            <div class="py-2">
                <label for="estado">Estado:</label>
                <input class="border border-gray-300 rounded-sm px-3 py-2 w-full" v-model="estado" type="text" placeholder="Estado" id="estado" >
            </div>
            <div class="py-2">
                <label for="inicio_programado">Inicio Programado:</label>
                <input class="border border-gray-300 rounded-sm px-3 py-2 w-full" v-model="inicioProgramado" type="datetime-local" id="inicio_programado" >
            </div>
            <div class="py-2">
                <label for="Fin_Programado">Fin Programado:</label>
                <input class="border border-gray-300 rounded-sm px-3 py-2 w-full" v-model="inicioReal" type="datetime-local" id="Fin_Programado" >
            </div>
            <div class="py-2">
                <label for="Inicio_Real">Inicio Real:</label>
                <input class="border border-gray-300 rounded-sm px-3 py-2 w-full" v-model="finProgramado" type="datetime-local" id="Inicio_Real" >
            </div>
            <div class="py-2">
                <label for="fin_real">Fin Real:</label>
                <input class="border border-gray-300 rounded-sm px-3 py-2 w-full" v-model="finReal" type="datetime-local" id="fin_real" >
            </div>
            <div class="flex justify-center py-2">
                <button onclick="location.href='pm_listado/index'" class="text-white bg-[#F57C00] hover:bg-[#F57C00BF] rounded-lg text-sm px-4 py-2">Guardar</button>
            </div>
        </form>
    </div>
</template>

<script>
    export default{};
</script>