<template>
    <PieChart :chartData="testData"/>
</template>

<script>
    import {defineComponent} from 'vue';
    import {PieChart} from 'vue-chart-3';
    import {Chart, registerables} from "chart.js";

    Chart.register(...registerables);

    export default defineComponent({
        name:'TortaEjecucion',
        components: {PieChart},
        setup()
        {
            const testData =
            {
                labels: ['EN EJECUCIÓN', 'TERMINADA', 'CANCELADA', 'REPROGRAMADA', 'NO INICIADA'],
                datasets:[
                    {
                        data: [25, 30, 20, 15, 10 ],
                        backgroundColor: ['#1A2151', '#233185', '#233185', '#263ECF', '#2E51E2'],
                        hoverBackgroundColor: ['#1A2151', '#233185', '#233185', '#263ECF', '#2E51E2'],
                    },
                ],
            };
            return { testData };
        },
    });
</script>