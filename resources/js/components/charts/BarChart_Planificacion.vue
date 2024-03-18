<template>
    <BarChart :chartData="testData" />
</template>

<script>
import { defineComponent } from "vue";
import { BarChart } from "vue-chart-3";
import { Chart, registerables } from "chart.js";

Chart.register(...registerables);

export default defineComponent({
    name: "BarraPlanificacion",
    components: { BarChart },
    setup() {
        const testData = {
            labels: [
                "% OT Liberadas",
                "% Materiales Disponibles",
                "% servicios contratados",
            ],
            datasets: [
                {
                    axis: "y",
                    data: [90, 60, 85],
                    fill: false,
                    backgroundColor: ["#0A2140FF", "#0A2140CC", "#0A214099"],
                    hoverBackgroundColor: [
                        "#F57C00FF",
                        "#F57C00CC",
                        "#F57C0099",
                    ],
                },
            ],
        };
        return { testData, config };
    },
});
</script>
