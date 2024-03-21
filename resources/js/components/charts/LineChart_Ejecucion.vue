<!-- <template>
    <LineChart :chartData="chartData" />
</template>

<script>
import axios from "axios";
import { LineChart } from "vue-chart-3";

export default {
    components: {
        LineChart,
    },
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
                const response = await axios.get("/api/actividad");
                const data = response.data;

                const fechaP = {};

                for (const item of data) {
                    if (
                        item.inicioPlan &&
                        item.finPlan &&
                        typeof item.inicioPlan === "string" &&
                        typeof item.finPlan === "string"
                    ) {
                        const inicioP = new Date(item.inicioPlan);
                        const finP = new Date(item.finPlan);

                        fechaP.push(inicioP, finP)
                    }
                }
                
                fechaP.sort((a, b) => a - b);

                const datosCurvaS = fechaP.map((fecha, index)=> ({
                    x: index + 1,
                    y: fecha.getTime(),
                }));

                this.chartData = {
                    labels: datosCurvaS.map((dataPoint) => dataPoint.x),
                    datasets:[
                        {
                            label: "Curva S",
                            data: datosCurvaS,
                            borderColor: "#0A2140",
                            backgroundColor: "transparent",
                            pointRadius: 0,
                        },
                    ],
                };

            } catch (error) {
                console.error("Error al cargar los datos: ", error);
            }
        },
    },
};
</script> -->
<template>
    <LineChart :chartData="testData" />
</template>

<script>
import { defineComponent } from "vue";
import { LineChart } from "vue-chart-3";
import { Chart, registerables } from "chart.js";

Chart.register(...registerables);

export default defineComponent({
    name: "Curva-S",
    components: { LineChart },

    setup() {
        const testData = {
            labels: ["1", "2", "3", "4", "5", "6", "7", "8"],
            datasets: [
                {
                    label: "PROGRAMADO",
                    borderColor: "#0019FF",
                    data: [0, 10, 20, 30, 40, 50, 60, 100],
                },
                {
                    label: "REAL",
                    borderColor: "#FF0000",
                    data: [0, 5, 15, 35, 40, 45, 60, 100],
                },
                {
                    label: "PROYECTADO",
                    borderColor: "#FFA800",
                    data: [0, 15, 25, 35, 40, 55, 65, 100],
                },
            ],
        };

        const options = {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                x: {
                    type: "linear",
                    position: "bottom",
                },
                y: {
                    type: "linear",
                    position: "left",
                },
            },
        };
        return { testData, options };
    },
});
</script>
