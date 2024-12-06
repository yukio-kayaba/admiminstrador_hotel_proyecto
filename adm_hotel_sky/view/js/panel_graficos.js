var cuadro_datos;
var myChart,data;
var grafico_lineal;
const alterar_graficos = (id,titulo,datos =[],valores = [])=>{
    const ctx = document.getElementById(id).getContext('2d');
    myChart = new Chart(ctx, {
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
    cuadro_datos = new Chart(elemento,{
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

const linea_doble = (id,titulo,valores =[],valores2 = [] )=>{
    const DATA_COUNT = 7;
    const NUMBER_CFG = {count:DATA_COUNT,min:-100,max:100};
    const labels = Utils.months({count:7});

    data = {
        labels:labels,
        datasets:[
            {
                label:"dataset 1",
                data:Utils.numbers(NUMBER_CFG),
            },
            {
                label:"dataset 2",
                data
            }
        ]
    };
    const config = {
        type:'line',
        data:data,
        options:{
            responsive:true,
            plugins:{
                legend:{
                    position:'top'
                },
                title:{
                    display:true,
                    text:"chart "
                }
            }
        }
    };
}
const graficos_lineales = (id,titulo,datos,valores)=>{
    const datasetData = valores;

    const elemento = document.getElementById(id).getContext('2d');
    grafico_lineal = new Chart(elemento, {
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

$(document).ready(function(){
    const fecha_datos = document.getElementById("fecha_reporte");
    function cargar_datos(){

        let fechaHoy = new Date();

        let año = fechaHoy.getFullYear();
        let mes = (fechaHoy.getMonth() + 1).toString().padStart(2, '0'); 
        let dia = fechaHoy.getDate().toString().padStart(2, '0'); 
        let fechaFormateada = `${año}-${mes}-${dia}`;
        const datos ={
            fecha:fechaFormateada
        };

        $.ajax({
            type: "post",
            url: "http://localhost:4000/api/habitaciones/reporte_dias",
            data: datos,
            beforeSend:function(xhr){
                let datos = JSON.parse(localStorage.getItem("datos"));
                xhr.setRequestHeader("id", datos[0].id);
                xhr.setRequestHeader("id_token", datos[0].id_tokem);
                xhr.setRequestHeader("token", datos[0].tokem);
            },
            success: function (response) {
                // console.log(response);
                const valores = JSON.parse(response)[0];
                const valores2 = JSON.parse(response)[1]
                // console.log(valores);
                let primer = (valores[0].habitaciones == null)? 0 :valores[0].habitaciones; 
                let segundo = (valores[0].reporte == null)? 0:valores[0].reporte;
                let tercero = (valores[0].usuario == null)? 0 : valores[0].usuario;
                graficos_redondeados('ventas','clientes ',['registrados','ventas','reclamos'],[primer,segundo,tercero]);   
                graficos_lineales('ingresos','ventas del dia',['9am','10pm','11pm'],valores2);
            }
        });
    }
    function actualizar_datos(){
        let fechaHoy = new Date();

        let año = fechaHoy.getFullYear();
        let mes = (fechaHoy.getMonth() + 1).toString().padStart(2, '0'); 
        let dia = fechaHoy.getDate().toString().padStart(2, '0'); 
        let fechaFormateada = `${año}-${mes}-${dia}`;

        const datos ={
            fecha:fechaFormateada
        };
        // console.log(datos);
        $.ajax({
            type: "post",
            url: "http://localhost:4000/api/habitaciones/reporte_dias",
            data: datos,
            beforeSend:function(xhr){
                let datos = JSON.parse(localStorage.getItem("datos"));
                xhr.setRequestHeader("id", datos[0].id);
                xhr.setRequestHeader("id_token", datos[0].id_tokem);
                xhr.setRequestHeader("token", datos[0].tokem);
            },
            success: function (response) {
                // console.log(response);
                const valores = JSON.parse(response)[0];
                const valores2 = JSON.parse(response)[1];
                // console.log(valores);
                let primer = (valores[0].habitaciones == null)? 0 :valores[0].habitaciones; 
                let segundo = (valores[0].reporte == null)? 0:valores[0].reporte;
                let tercero = (valores[0].usuario == null)? 0 : valores[0].usuario;

                cuadro_datos.data.datasets.data = [primer,segundo,tercero];
                cuadro_datos.update();
                
                grafico_lineal.data.labels.data = valores2; 
                grafico_lineal.update();
                // graficos_redondeados('ventas','clientes ',['registrados','ventas','reclamos'],[primer,segundo,tercero]);   
            }
        });
    }

    function obtner_datos_fecha(mess){
        const datos = {
            fecha:mess
        }
        $.ajax({
            type: "post",
            url: "http://localhost:4000/api/habitaciones/reporte_mensual",
            data: datos,
            beforeSend:function(xhr){
                let datos = JSON.parse(localStorage.getItem("datos"));
                xhr.setRequestHeader("id", datos[0].id);
                xhr.setRequestHeader("id_token", datos[0].id_tokem);
                xhr.setRequestHeader("token", datos[0].tokem);
            },
            success:function(respuesta){
                // console.log(respuesta);
                const valores = JSON.parse(respuesta)[0];
                let elementos = [valores.total_habitacion,valores.total_clientes,valores.total_reclamos];  
                myChart.data.datasets[0].data = elementos;
                myChart.update();
                // alterar_graficos('myChart','nuevo Mienbro',['total_habitaciones','clientes','reclamos'],elementos);

            }
        })
    }

    fecha_datos.addEventListener("change",()=>{
        const fullDate = fecha_datos.value; 
        const month = fullDate.split("-")[1];
        obtner_datos_fecha(month);
        // console.log(`valor : ${month}`);
    });



    cargar_datos();
    setInterval(actualizar_datos,15000);
    alterar_graficos('myChart','nuevo Mienbro',['total_habitaciones','clientes','reclamos'],[1,1,1]);

    // graficos_redondeados('ventas','clientes ',['registrados','ventas','reclamos'],[20,10,5]);

});
