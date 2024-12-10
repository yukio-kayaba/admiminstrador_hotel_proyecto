<?php
    require_once("../../config.php");
    require_once("../consultas.php");
    if(isset($_POST['posicion'])){
        $valor = $_POST['posicion'];
        $expresion1 = "/^[0-9]+$/";

        if(preg_match($expresion1,$valor)){
            $valores = [
                "id" => $valor
            ];
            $consulta = new Consulta();
            $url = api_ruta."api/habitaciones/fotos";
            $respuesta = $consulta->CONSULTA_POST_DA($url,$valores);
            print_r($respuesta);
            return;
        }else{
            echo "error";
        }

    }
    echo "error";
?>