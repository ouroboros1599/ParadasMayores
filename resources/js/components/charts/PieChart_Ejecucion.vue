<template>
    <PieChart :chartData="testData" />
</template>

<script>
import { defineComponent } from "vue";
import { PieChart } from "vue-chart-3";
import { Chart, registerables } from "chart.js";

Chart.register(...registerables);

export default defineComponent({
    name: "TortaEjecucion",
    components: { PieChart },
    setup() {
        const testData = {
            labels: [
                "EN EJECUCIÓN",
                "TERMINADA",
                "CANCELADA",
                "REPROGRAMADA",
                "NO INICIADA",
            ],
            datasets: [
                {
                    data: [25, 30, 20, 15, 10],
                    backgroundColor: [
                        "#0A2140FF",
                        "#0A2140CC",
                        "#0A214099",
                        "#0A214066",
                        "#0A214033",
                    ],
                    hoverBackgroundColor: [
                        "#F57C00FF",
                        "#F57C00CC",
                        "#F57C0099",
                        "#F57C0066",
                        "#F57C0033",
                    ],
                },
            ],
        };
        return { testData };
    },
});
</script>
