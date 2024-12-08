<?php
    require_once("../consultas.php");
    require_once("../../config.php");
    session_start();
    $cant_datos = 0; 
    if(isset($_POST['cantidad'])){
        $cant_datos = $_POST['cantidad'];
    }

    if(isset($_SESSION['id'])){
        $acceso = new Consulta();
        if($_SESSION['opcion'] == "habitacion"){
            $direccion = api_ruta."api/habitaciones";
            
            $resultado = $acceso->CONSULTA_POST_DA($direccion,['limite'=>0]);
            print($resultado);
        }else if($_SESSION['opcion'] == "huespedes"){
            $direccion = api_ruta."api/usuarios";
            $valores = [
                'id_user'=>$_SESSION['id'],
                'tokem'=>$_SESSION['tokem'],
                'id_tokem'=>$_SESSION['id_tokem']
            ];
            $body = [
                'cantidad' => $cant_datos
            ];
            $resultado = $acceso->CONSULTA_POST_DA($direccion,$body,$valores);
            print_r($resultado);
        }else{
            print_r("no");
        }
    }else{
        print("no");
    }
?>