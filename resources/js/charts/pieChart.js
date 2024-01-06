import Chart from 'chart.js/auto';

document.addEventListener('DOMContentLoaded', function () {
  // Obtener el contexto del lienzo
  const ctx = document.getElementById('myPieChart').getContext('2d');

  // Configuración del gráfico de torta
  const data = {
    labels: ['Iniciada', 'No Iniciada', 'Terminada', 'Canceladas', 'Iniciadas Atrasadas'],
    datasets: [{
      data: [25, 30, 20, 15, 10 ],
      backgroundColor: ['#1A2151', '#233185', '#233185', '#263ECF', '#2E51E2'], // Colores
      hoverBackgroundColor: ['#1A2151', '#233185', '#233185', '#263ECF', '#2E51E2'],
    }],
  };

  // Configuración del gráfico
  const options = {
    responsive: true,
    maintainAspectRatio: false,
  };

  // Crear el gráfico de torta
  new Chart(ctx, {
    type: 'pie',
    data: data,
    options: options,
  });
});
