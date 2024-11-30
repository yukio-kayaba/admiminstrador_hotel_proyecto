const alterar_graficos = ()=>{
    const ctx = document.getElementById('myChart').getContext('2d'); // Accede al contexto del canvas
    const myChart = new Chart(ctx, {
        type: 'bar', // Tipo de gráfico (bar, line, pie, etc.)
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'], // Etiquetas del eje X
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3], // Datos para el gráfico
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
            y: {
                beginAtZero: true
                }
            }
        }
    });

};

const graficos_redondeados = ()=>{
    const elemento = document.getElementById('ventas').getContext('2d');
    const myChart = new Chart(elemento,{
        type:'polarArea',
        data:{
            labels: [
              'Registrados',
              'Ventas',
              'Reclamos'
            ],
            datasets: [{
              label: '#de ventas',
              data: [11, 16, 7],
              backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(75, 192, 192)',
                'rgb(255, 205, 86)'
              ],
              borderWidth:1
            }]
        },
        options:{
            responsive:true
        }
    });
};

const graficos_lineales = ()=>{
    const datasetData = [12, -15, 35, 50, -25, 40];  // Ejemplo de datos

    const elemento = document.getElementById('ingresos').getContext('2d');
    const myChart = new Chart(elemento, {
        type: 'line', 
        data: {
            labels: ['9pm', '10pm', '11pm', '12pm', '1am', '2am'],
            datasets: [{
                label: 'Dataset',  
                data: datasetData, 
                borderColor: 'rgb(255, 99, 132)', 
                backgroundColor: 'rgba(255, 99, 132, 0.2)', 
                pointStyle: 'circle',  
                pointRadius: 10,  
                pointHoverRadius: 15,  
            }]
        },
        options: {
            responsive: true, 
            plugins: {
                title: {
                    display: true,
                    text: (ctx) => 'Point Style: ' + ctx.chart.data.datasets[0].pointStyle,  
                }
            }
        }
    });
}
graficos_lineales();
graficos_redondeados();
alterar_graficos();
