$(document).ready(function(){

    $('#enviar').click((e)=>{
        let correo = $('#correo').val();
        let contra = $('#contra').val();
        
        console.log(`correo ${correo}  - ${contra}`);
        e.preventDefault();
        const data ={
            correo:correo,
            contra:contra
        };
        $.ajax({
            url:"./model/tasks/login_val.php",
            type:"POST",
            data:data,
            success:function(response){
                if(response == "no_permitido" || response == "no_correct"){
                    $(".respuesta_control").html("usuario o cotra incorrectos");
                }else if(response == "no_espacios" || response == "error"){
                    $(".respuesta_control").html("usuario o contraseña incorrecto");
                }else{
                    console.log(JSON.parse(response));
                    $(".respuesta_control").html("datos correctos");
                    localStorage.setItem("datos",response);
                }
            }
        })
    });


});