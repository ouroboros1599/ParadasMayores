<template>
    <div>
        <LineChart :chartData="chartData" />
    </div>
</template>

<script>
import { defineComponent } from "vue";
import { LineChart } from "vue-chart-3";
import { Chart, registerables } from "chart.js";
import axios from "axios";

Chart.register(...registerables);

export default defineComponent({
    components: { LineChart },
    data() {
        return {
            chartData: null,
        };
    },
    mounted() {
        this.fetchData();
    },
    methods: {
        async fetchData() {
            try {
                const responseActividad = await axios.get("/api/actividad");
                const dataActividad = responseActividad.data;

                const fechas = [];
                const horasAcumuladas = []; // Array para almacenar las horas acumuladas

                let totalHoras = 0; // Variable para almacenar el total de horas

                dataActividad.forEach((item) => {
                    const fecha = new Date(item.inicioPlan);
                    fechas.push(fecha.toLocaleDateString()); // Agregar fecha al array de fechas
                    totalHoras += fecha.getHours(); // Sumar las horas de la fecha
                    horasAcumuladas.push(totalHoras); // Agregar el total acumulado al array de horas acumuladas
                });

                // Calcular el porcentaje de horas acumulado para los puntos siguientes
                const horasPorcentaje = horasAcumuladas.map((horas, index) => {
                    if (index === 0) return 0; // Para el primer punto, el porcentaje es 0
                    return (horas / totalHoras) * 100; // Calcular porcentaje para los puntos siguientes
                });

                this.chartData = {
                    labels: fechas, // Usar fechas como etiquetas del eje X
                    datasets: [
                        {
                            label: "PLANIFICADO",
                            data: horasPorcentaje, // Usar los porcentajes de horas como datos del eje Y
                            backgroundColor: "#0000FF", // Color de fondo
                            borderColor: "#0000FFCC", // Color del borde
                            borderWidth: 1.5, // Ancho del borde
                        },
                    ],
                };
            } catch (error) {
                console.error("Error al obtener los datos", error);
            }
        },
    },
});
</script>
