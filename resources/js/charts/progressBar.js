import Chart from 'chart.js/auto';

document.addEventListener('DOMContentLoaded', function(){
  const ctx = document.getElementById('progressChart').getContext('2d');

  const data = {
    labels: ['%OT Liberadas'],
    datasets: [{
      axis: 'x',
      label: '%OT Liberadas',
      data: [65],
      fill: false,
      backgroundColor: ['#2E51E2'],
      borderColor: ['#1A2151'],
      borderWidth: 1
    }]
  };

  const options = {
    indexAxis: 'y',
    responsive: true,
    maintainAspectRatio: false,
    scales: { 
      x:{
        display: false,
        stacked: true
      },
      y:{
        display: false,
        stacked: true
      },
    },
    // plugins: {
    //   legend:{
    //     display:false
    //   }
    // }
  };

  new Chart(ctx, {
    type: 'bar',
    data: data,
    options: options
  })
});