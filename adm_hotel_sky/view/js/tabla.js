var datos_global;
$(document).ready(function(){
    function carga_valores(cantidad){
        const datos = {
            'cantidad':cantidad
        };
        $.ajax({
            type: "POST",
            data:datos,
            url: "./model/tasks/entrega_datos.php",
            success:function(respuesta){
                if(respuesta == "no"){
                    console.log("error data");
                    return;
                }
                let valores = JSON.parse(respuesta);
                console.log(valores);
                let titulos = Object.keys(valores[0]);
                // console.log(titulos);
                let valores_title = "";
                titulos.forEach(element => {
                    if(element != "habitacionescol" && element != "enlaces"){
                        valores_title += ` <th> ${element}</th>`;
                    }
                });

                valores_title += ` <th>Opciones</th>`;
                document.getElementsByClassName('titulos_date')[0].innerHTML = valores_title;
                let datos_subir = "";
                valores.forEach(datos => {
                    datos_subir = "<tr>"
                    titulos.forEach(i => {
                        if(i != "habitacionescol" && i != "enlaces"){
                            valores_title += ` <th> ${datos[i]}</th>`;
                        }
                    });
                    datos_subir += "</tr>"
                });

                // document.getElementsByClassName("datos_tabla_master")[0].innerHTML =datos_subir;
            }
        })
    }

    carga_valores(0);

});