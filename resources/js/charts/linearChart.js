import Chart from 'chart.js/auto';

document.addEventListener('DOMContentLoaded', function (){
    //obtener el contexto del lienzo
    const ctx = document.getElementById('myLineChart').getContext('2d');

    //configuración del grafico Curva S
    const data ={
        labels:[' 1',' 2',' 3',' 4',' 5',' 6',' 7',' 8'],
        datasets:[
            {
                label: 'Programado',
                borderColor: '#0019FF',
                data: [0, 10, 20, 30, 40, 50, 60, 100],
                fill: false,
            },
            {
                label: 'Real',
                borderColor: '#FF0000',
                data: [0, 5, 15, 35, 40, 45, 60, 100],
                fill: false,
            },
            {
                label: 'Proyectado',
                borderColor: '#FFA800',
                data: [0, 10, 20, 30, 40, 50, 60, 100],
                fill: false,
            },
        ],
    };

    // configuración del grafico
    const options = {
        responive: true,
        maintainAspectRatio: false,
        scales:{
            x:{
                type: 'linear',
                position: 'bottom',
            },
            y:{
                type: 'linear',
                position: 'left', 
            },
        },
    };

    //crear el grafico 
    new Chart(ctx,{
        type: 'line',
        data: data,
        options: options,
    });
});
