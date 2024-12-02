


<?php
	require_once("config.php");
	require_once("controller/controlador.php");
	require_once("controller/controlador_vista.php");
	session_start();
	// print_r($segmentos);
	if(isset($_SESSION['id'])){
		$segmentos = isset($_GET['vista']) ? explode('/', $_GET['vista']):"";
		if(isset($segmentos[1])){
			if(method_exists("ModeloControladorVista",$segmentos[1])){
				// if (isset($segmentos[1]) && $segmentos[0] == 'panel') {
				// 	if(method_exists('ModeloControladorVista',$segmentos[1])){
				// 		$_SESSION['archivo'] = $segmentos[1];
				// 		ModeloControlador::archivo();
				// 	}else{
				// 		ModeloControlador::error_pagina();
				// 	}
				// }else{
				// 	ModeloControlador::{$segmentos[0]}();
				// }
				$_SESSION['archivo'] = $segmentos[1];
				ModeloControlador::archivo();
			} else {
				if(method_exists("ModeloControlador",$segmentos[0])){
					ModeloControlador::{$segmentos[0]}();
				}else{
					ModeloControlador::error_pagina();
				}
			}
		}else {
			if(isset($segmentos[0])){
				if(method_exists("ModeloControlador",$segmentos[0])){
					ModeloControlador::{$segmentos[0]}();
				}
			}else{
				ModeloControlador::panel();
			}
		};
	}else{
		ModeloControlador::loguin();
	}
?>
