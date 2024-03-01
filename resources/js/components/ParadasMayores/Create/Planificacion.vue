<template>
    <div class="m-10 flex basis-3/4 w-full text-sm text-left justify-center font-semibold">
        <form>
            <div class="py-2">
                <label for="Actividad">Actividad:</label>
                <input class="border border-gray-300 rounded-sm px-3 py-2 w-full" v-model="Actividad" type="text" placeholder="Actividad" id="Actividad" >
            </div>
            <div class="py-2">
                <label for="Tareas">Tareas:</label>
                <input class="border border-gray-300 rounded-sm px-3 py-2 w-full" v-model="Tareas" type="text" placeholder="Tareas" id="Tareas" >
            </div>
            <div class="py-2"> 
                <label for="Campo_Revisión">Nombre Parada:</label>
                <input class="border border-gray-300 rounded-sm px-3 py-2 w-full" v-model="Campo_Revisión" type="text" placeholder="Nombre Parada" id="Campo_Revisión" >
            </div>
            <div class="py-2">
                <label for="Orden_Trabajo">Orden de Trabajo:</label>
                <input class="border border-gray-300 rounded-sm px-3 py-2 w-full" v-model="Orden_Trabajo" type="text" placeholder=" Orden_Trabajo" id="Orden_Trabajo" >
            </div>
            <div class="py-2">
                <label for="Critica">Critica:</label>
                <input class="border border-gray-300 rounded-sm px-3 py-2 w-full" v-model="Critica" type="checkbox" placeholder="Critica" id="Critica" >
            </div>
            <div class="py-2">
                <label for="Servicio_Contratado">Servicio Contratado:</label>
                <input class="border border-gray-300 rounded-sm px-3 py-2 w-full" v-model="Servicio_Contratado" type="text" id="Servicio_Contratado" >
            </div>
            <div class="py-2">
                <label for="Encargado">Encargado:</label>
                <input class="border border-gray-300 rounded-sm px-3 py-2 w-full" v-model="Encargado" type="text" id="Encargado" >
            </div>
            <div class="py-2">
                <label for="Materiales">Materiales :</label>
                <input class="border border-gray-300 rounded-sm px-3 py-2 w-full" v-model="Materiales" type="text" id="Materiales" >
            </div>
            <div class="py-2">
                <label for="Ubicacion_Materiales">Ubicación de Material :</label>
                <input class="border border-gray-300 rounded-sm px-3 py-2 w-full" v-model="Ubicacion_Materiales" type="text" id="Ubicacion_Materiales" >
            </div>
            <div class="py-2">
                <label for="Material_Disponible">Material Disponible :</label>
                <input class="border border-gray-300 rounded-sm px-3 py-2 w-full" v-model="Material_Disponible" type="text" id="Material_Disponible" >
            </div>
            <div class="py-2">
                <label for="Inicio_Programado">Inicio Programado :</label>
                <input class="border border-gray-300 rounded-sm px-3 py-2 w-full" v-model="Inicio_Programado" type="datetime-local" id="Inicio_Programado" >
            </div>
            <div class="py-2">
                <label for="Fin_Programado">Fin_Programado :</label>
                <input class="border border-gray-300 rounded-sm px-3 py-2 w-full" v-model="Fin_Programado" type="datetime-local" id="Fin_Programado" >
            </div>
            <div class="flex justify-center py-2">
                <button onclick="location.href='pm_planificacion'" class="text-white bg-[#F57C00] hover:bg-[#F57C00BF] rounded-lg text-sm px-4 py-2">Guardar</button>
            </div>
        </form>
    </div>
</template>

<script>
    export default{};
</script>