<template>
    <div>
        <PieChart :chartData="chartData" />
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
import { PieChart } from "vue-chart-3";
import axios from "axios";

export default {
    components: {
        PieChart,
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

                // Contar cuántas paradas hay en cada estado
                const countByState = {};
                for (const item of data) {
                    if (
                        item.estadoActividad &&
                        typeof item.estadoActividad === "string"
                    ) {
                        if (!countByState[item.estadoActividad]) {
                            countByState[item.estadoActividad] = 0;
                        }
                        countByState[item.estadoActividad]++;
                    }
                }
                // Crear el objeto de datos del gráfico
                this.chartData = {
                    labels: Object.keys(countByState),
                    datasets: [
                        {
                            data: Object.values(countByState),
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
            } catch (error) {
                console.error("Error al cargar los datos:", error);
            }
        },
    },
};
</script>
