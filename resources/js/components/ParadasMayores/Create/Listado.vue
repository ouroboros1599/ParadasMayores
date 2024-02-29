<template>
    <form >
        <div>
            <label for="empresa">Empresa:</label>
            <input v-model="empresa" type="text" id="empresa" required>
        </div>
        <div>
            <label for="division">División:</label>
            <input v-model="division" type="text" id="division" required>
        </div>
        <div>
            <label for="nombre_parada">Nombre Parada:</label>
            <input v-model="nombreParada" type="text" id="nombre_parada" required>
        </div>
        <div>
            <label for="encargado">Encargado:</label>
            <input v-model="encargado" type="text" id="encargado" required>
        </div>
        <div>
            <label for="estado">Estado:</label>
            <input v-model="estado" type="text" id="estado" required>
        </div>
        <div>
            <label for="inicio_programado">Inicio Programado:</label>
            <input v-model="inicioProgramado" type="datetime-local" id="inicio_programado" required>
        </div>
        <div>
            <label for="inicio_real">Inicio Real:</label>
            <input v-model="inicioReal" type="datetime-local" id="inicio_real" required>
        </div>
        <div>
            <label for="fin_programado">Fin Programado:</label>
            <input v-model="finProgramado" type="datetime-local" id="fin_programado" required>
        </div>
        <div>
            <label for="fin_real">Fin Real:</label>
            <input v-model="finReal" type="datetime-local" id="fin_real" required>
        </div>
        <button type="submit">Guardar</button>
    </form>
</template>

<script>
    export default{};
</script>