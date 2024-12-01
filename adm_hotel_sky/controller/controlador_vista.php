<?php
class ModeloControladorVista{
    public function __construct(){}

    static function habitaciones(){
        return 'habitaciones';
    }

    static function reservaciones(){
        return 'reservaciones';
    }

	static function huespedes(){
        return 'huespedes';
    }

    static function servicios(){
        return 'servicios';
    }

    static function error_pagina(){
        echo "Error 404: Página no encontrada";
    }
}
?>