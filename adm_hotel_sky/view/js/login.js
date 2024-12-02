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
                if(response == "no_permitido"){
                        
                }else if(response == "no_espacios" || response == "error"){

                }else{
                    console.log(JSON.parse(response));

                    localStorage.setItem("datos",response);
                }
            }
        })
    });


});