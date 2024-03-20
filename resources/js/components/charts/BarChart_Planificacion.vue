<template>
    <div>
        <bar-chart :chartData="chartData" />
    </div>
</template>

<script>
import axios from "axios";
import { BarChart } from "vue-chart-3";

export default {
    components: {
        BarChart,
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
                // Obtener datos de la tabla actividad
                const responseActividad = await axios.get("/api/actividad");
                const dataActividad = responseActividad.data;

                // Obtener datos de la tabla materiales
                const responseMateriales = await axios.get("/api/material");
                const dataMateriales = responseMateriales.data;

                // Contar la cantidad de actividades TERMINADAS
                const countTerminadas = dataActividad.filter((item) =>
                    this.isTerminada(item.estadoActividad)
                ).length;

                // Contar la cantidad de materiales en BODEGA o FAENA
                const countDisponibles = dataMateriales.filter((item) =>
                    this.isDisponible(item.ubicacion)
                ).length;

                //Calcular el porcentaje de Ordenes de trabajo liberadas
                const porcentajeLiberada =
                    (countTerminadas / dataActividad.length) * 100;
                // Calcular el porcentaje de materiales disponibles
                const porcentajeDisponibles =
                    (countDisponibles / dataMateriales.length) * 100;

                this.chartData = {
                    labels: ["%OT LIBERADAS", "%MATERIALES DISPONIBLES"],
                    datasets: [
                        {
                            data: [porcentajeLiberada, porcentajeDisponibles],
                            backgroundColor: ["#0A2140", "#F57C00"],
                            hoverBackgroundColor: ["#0A2140CC", "#F57C00CC"],
                        },
                    ],
                };
            } catch (error) {
                console.error("Error al cargar los datos", error);
            }
        },
        isTerminada(estado) {
            return (
                typeof estado === "string" &&
                estado.toUpperCase() === "TERMINADA"
            );
        },
        isDisponible(ubicacion) {
            return (
                typeof ubicacion === "string" &&
                (ubicacion.toUpperCase() === "BODEGA" ||
                    ubicacion.toUpperCase() === "FAENA")
            );
        },
    },
};
</script>
