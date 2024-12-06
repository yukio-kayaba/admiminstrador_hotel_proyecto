<?php
    $baseUrl = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
    $rutaCompleta = $baseUrl;
    $ruta_api = "http://localhost:4000/";
    define("url",$rutaCompleta);
    define("api_ruta",$ruta_api);

?>