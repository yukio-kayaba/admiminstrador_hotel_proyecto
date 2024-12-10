<?php
    require_once("../../config.php");
    require_once("../consultas.php");
    if(isset($_POST['caracteristicas']) && isset($_POST['precio'])){
        $expresion_numeros = '/^\d+$/';
        $expresion_letras = '/^[a-zA-Z1-9\s]+$/';

        $caracteristica = $_POST['caracteristicas'];
        $precio = $_POST['precio'];
        $imagenes = $_POST['imagenes'];

        if(preg_match($expresion_numeros,$precio) && preg_match($expresion_letras,$caracteristica)){
            $consulta = new Consulta();
            if(isset($_POST['id'])){
                $id_datos = $_POST['id'];  
                
            }else{
                $url = api_ruta."api/habitaciones/addImage";
                $imagenes_aux = [];
                foreach ($imagenes as $key => $value) {
                    $imagenes_aux[] = $value['url'];
                }
                $valores = [
                    'caracteristicas'=>$caracteristica,
                    'precio'=>$precio,
                    'imagenes'=> json_encode($imagenes_aux)
                ];
                $resultado = $consulta->CONSULTA_POST_DA($url,$valores);
                print_r($resultado);
            }            
        }else{
            echo "error";
        }
    }else{
        echo "error";
    }

?>