<template>

</template>

<script>
    import { PieChart } from 'vue-chart-3';
    import { Chart, registerables } from 'chart.js';

    Chart.register(...registerables);

    export default{
        name: "",
        components: { PieChart },
        setup(){
            const data = {
                labels: ['EN EJECUCIÓN', 'NO INICIADA', 'TERMINADA', 'CANCELADA', 'REPROGRAMADA'],
                datasets: [{
                data: [25, 30, 20, 15, 10 ],
                backgroundColor: ['#1A2151', 
                                  '#233185', 
                                  '#233185', 
                                  '#263ECF', 
                                  '#2E51E2'], 
                hoverBackgroundColor: ['#1A2151', 
                                        '#233185', 
                                        '#233185', 
                                        '#263ECF', 
                                        '#2E51E2'],
                    }   
                ],
            };
            return {data};
        }
    };
</script>