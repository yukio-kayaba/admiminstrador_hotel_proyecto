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

    static function error_pagina(){
        echo "Error 404: Página no encontrada";
    }
}
?>