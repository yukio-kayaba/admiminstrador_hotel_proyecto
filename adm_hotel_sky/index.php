<?php
	require_once("controller/controlador.php");
	if(isset($_GET['vista'])){
		if(method_exists("ModeloControlador",$_GET['vista'])){
			ModeloControlador::{$_GET["vista"]}();
		} else {
			ModeloControlador::error_pagina();
		}
	}else {
		ModeloControlador::inicio();
	};
?>
