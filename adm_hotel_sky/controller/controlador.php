<?php
class ModeloControlador{
    public function __construct(){}

    static function inicio(){
        require_once("./view/inicio.php");
    }

    static function loguin(){
        require_once("./view/loguin.php");
    }

	static function panel(){
        require_once("./view/panel.php");
    }

    static function archivo(){
        require_once('./view/informacion_datos.php');
    }

    static function habitaciones(){
        $_SESSION['opcion'] = "habitacion";
        require_once('./view/tabla.php');
    }
    static function reservaciones(){
        $_SESSION['opcion'] = "reservacion";
        require_once('./view/tabla.php');
    }

    static function huespedes(){
        $_SESSION['opcion'] = "huespedes";
        require_once('./view/tabla.php');
    }


    static function error_pagina(){
        echo "Error 404: Página no encontrada";
    }
    static function cerrar(){
        require_once("./view/cerrar_secion.php");
    }
}
?>