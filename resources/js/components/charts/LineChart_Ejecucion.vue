<template>
    <div>
        <LineChart v-if="chartData" :chartData="chartData" />
    </div>
    <div class="flex justify-center mt-1 mb-1">
        <button
            @click="fetchData"
            class="bg-[#00b0ab] hover:bg-[#00b0abBF] rounded-2xl p-2 text-white font-bold"
        >
            Actualizar
        </button>
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

                let totalHoras = 0;
                let totalHorasFinPlan = 0;
                let totalHorasFinReal = 0;

                const fechasFinPlan = [];
                const fechasFinReal = [];
                const horasAcumuladasFinPlan = [];
                const horasAcumuladasFinReal = [];

                dataActividad.forEach((item) => {
                    const fechaFinPlan = new Date(item.finPlan);
                    fechasFinPlan.push(fechaFinPlan.toLocaleDateString());
                    totalHorasFinPlan += fechaFinPlan.getHours();
                    horasAcumuladasFinPlan.push(totalHorasFinPlan);

                    if (item.finReal) {
                        const fechaFinReal = new Date(item.finReal);
                        fechasFinReal.push(fechaFinReal.toLocaleDateString());
                        totalHorasFinReal += fechaFinReal.getHours();
                        horasAcumuladasFinReal.push(totalHorasFinReal);
                    }
                });

                if (fechasFinReal.length === 0) {
                    // Si no hay valores en finReal, no renderizar el gráfico
                    this.chartData = null;
                    return;
                }

                if (totalHorasFinReal > totalHorasFinPlan) {
                    // Si las horas acumuladas de finReal son mayores, usarlas como total de horas
                    totalHoras = totalHorasFinReal;
                } else {
                    totalHoras = totalHorasFinPlan;
                }

                const horasPorcentajeFinPlan = horasAcumuladasFinPlan.map(
                    (horas, index) => {
                        if (index === 0) return 0;
                        return (horas / totalHoras) * 100;
                    }
                );

                const horasPorcentajeFinReal = horasAcumuladasFinReal.map(
                    (horas, index) => {
                        if (index === 0) return 0;
                        return (horas / totalHoras) * 100;
                    }
                );

                this.chartData = {
                    labels: fechasFinPlan,
                    datasets: [
                        {
                            label: "REAL",
                            data: horasPorcentajeFinReal,
                            backgroundColor: "#FF0000",
                            borderColor: "#FF0000CC",
                            borderWidth: 2,
                        },
                        {
                            label: "PLANIFICADO",
                            data: horasPorcentajeFinPlan,
                            backgroundColor: "#0000FF",
                            borderColor: "#0000FFCC",
                            borderWidth: 2,
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
