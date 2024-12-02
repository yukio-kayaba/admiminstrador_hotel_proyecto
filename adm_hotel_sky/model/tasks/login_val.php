<?php
    // require_once("../config.php");
    require_once("../consultas.php");
    if(isset($_POST['correo']) && isset($_POST['contra'])){
        $usuario = $_POST['correo'];
        $contra = $_POST['contra'];
        if(strlen($usuario) > 10 && strlen($contra) > 10){
            $expresion = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
            $expresion1 = "/^[a-zA-Z0-9_áéíóúÁÉÍÓÚñÑçÇ\s]+$/";
            if(preg_match($expresion,$usuario) && preg_match($expresion1,$contra) ){
                $consulta = new Consulta();
                $valores = [
                    'correo'=>$usuario,
                    'contra'=>$contra
                ];
                $resultado = $consulta->CONSULTA_POST_DA("http://localhost:4000/api/habitaciones/login_adm",$valores);
                if($resultado != "error usuarios" || $resultado != "error al enviar datos"){
                    $descriptar = json_decode($resultado,true);
                    $id_usuario = $descriptar[0]['id'];
                    session_start();
                    $_SESSION['id'] = $id_usuario;
                    $_SESSION['nombre'] = $descriptar[0]['nombre']; 
                    print($resultado);
                    return;
                }
                echo $resultado;
                return;
            }

            echo "no_permitido";
        }else{
            echo "no_espacios";
            return;
        }
    }else{
        echo "error";
    }
?>