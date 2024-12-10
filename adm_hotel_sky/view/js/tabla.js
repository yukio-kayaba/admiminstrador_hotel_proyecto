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
                // console.log(valores);
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
                datos_global = valores;
                valores.forEach(datos => {
                    datos_subir += "<tr>"
                    titulos.forEach(element => {
                        if(element != "habitacionescol" && element != "enlaces"){
                            if(element == 'disponibilidad'){
                                let estado = (datos[element] == "activo")?"status-active":(datos[element] == "inactivo")? "status-inactive":"status-pending"; 
                                datos_subir += `<td><span class="${estado}">${datos[element]}</span></td>`;
                            }else{
                                datos_subir += ` <td> ${datos[element]}</td>`;

                            }
                        }
                        // console.log(element);
                    });
                    datos_subir += `
                        <td class="actions">
                                <button name="${datos[titulos[0]]}" class="btn-edit boton_editar_datos" data-id="1">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button name="${datos[titulos[0]]}" class="btn-delete boton_eliminar_datos" data-id="1">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                    `;
                    datos_subir += "</tr>"
                });
                // console.log(datos_subir);
                document.getElementsByClassName("datos_tabla_master")[0].innerHTML =datos_subir;
            }
        })
    }

    $(document).on("click",".boton_eliminar_datos",function(){
        let objeto = $(this).attr("name");
        console.log("clikeado eliminar"+objeto);
    });

    $(document).on("click",".boton_editar_datos",function(){
        let objeto = $(this).attr("name");
        console.log("cliekado en editar"+objeto);
    });

    carga_valores(0);

    // funciones del pop up
    const fondo_back_up = document.getElementById("pop_up");
    const cuerpo_pop_up = document.getElementById("cuerpo_pop_up");
    const boton_add = document.getElementById("boton_add");
    const boton_add_enlaces = document.getElementsByClassName("boton_add_enlaces")[0];
    fondo_back_up.addEventListener("click",(e)=>{
        // e.stopPropagation(); 
        fondo_back_up.style.display = "none";
    });
    cuerpo_pop_up.addEventListener("click",(e)=>{
        e.stopPropagation();
    });
    boton_add.addEventListener("click",()=>{
        let contenedor = document.getElementById("contenedor_principal_pop");
        let texto = "";
        let campos = Object.keys(datos_global[0]);
        campos.forEach(element => {
            if(element  == "caracteristicas" || element == "precio"){
                texto += etiquetas_datos(element);
            }
        });
        contenedor.innerHTML = texto;
        fondo_back_up.style.display = "flex";
    });
    boton_add_enlaces.addEventListener("click",()=>{
        const campo_fotos_enlaces = document.getElementById("fotos_enlaces");
        let texto = "";
        texto = campo_fotos();
        campo_fotos_enlaces.innerHTML += texto;
    });
});

function etiquetas_datos(titulo,dato=null){

    let texto = "";
    texto = `
        <div class="field">
                <label class="label">${titulo}</label>
                <div class="control has-icons-left has-icons-right">
                    <input class="input is-success" type="text" placeholder="Ingrese el ${titulo}" value="${(dato==null)?"":dato}">
                    <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                    </span>
                    <span class="icon is-small is-right">
                    <i class="fas fa-check"></i>
                    </span>
                </div>
            </div>
    `;
    return texto;
};

function campo_fotos(enlace = null){
    let texto = "";
    texto = `
        <div class="control input_imagen">
            <input class="input" type="text" placeholder="Ingrese el enlace" value="${(enlace != null)? enlace:""}">
            <img width="150px" src="${(enlace != null)? enlace:'https://images.pexels.com/photos/12296667/pexels-photo-12296667.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'}" alt="">
        </div>
    `;
    return texto;
};