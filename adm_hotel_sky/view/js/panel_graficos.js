const alterar_graficos = (id,titulo,datos =[],valores = [])=>{
    const ctx = document.getElementById(id).getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels:datos,
            datasets: [{
                label: titulo,
                data: valores,
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

const graficos_redondeados = (id,titulo,datos =[],valores = [])=>{
    const elemento = document.getElementById(id).getContext('2d');
    const myChart = new Chart(elemento,{
        type:'polarArea',
        data:{
            labels: datos,
            datasets: [{
              label: titulo,
              data: valores,
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

const graficos_lineales = (id,titulo,datos,valores)=>{
    const datasetData = valores;

    const elemento = document.getElementById(id).getContext('2d');
    const myChart = new Chart(elemento, {
        type: 'line', 
        data: {
            labels: datos,
            datasets: [{
                label: titulo,  
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
graficos_lineales('ingresos','ventas del dia',['9am','10,pm','11pm'],[3,5,2]);
graficos_redondeados('ventas','clientes ',['registrados','ventas','reclamos'],[20,10,5]);
alterar_graficos('myChart','nuevo Mienbro',['enero','febrero','marzo'],[150,100,170]);
