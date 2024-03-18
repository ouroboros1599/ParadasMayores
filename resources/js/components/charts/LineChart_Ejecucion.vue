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
