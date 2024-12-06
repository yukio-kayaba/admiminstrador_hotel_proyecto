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
        }else if(){
            
        }
    }else{
        print("no");
    }
?>