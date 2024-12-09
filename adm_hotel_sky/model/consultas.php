<?php
    class Consulta{
        public function __construct() {
        }

        public function CONSULTA_GET($url){
            $ch = curl_init();
        
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        
            $response = curl_exec($ch);
        
            if($response === false) {
                return "error";
                // echo "Error en la solicitud GET: " . curl_error($ch);
            }
            curl_close($ch);
            return $response;
        }

        public function CONSULTA_POST($url,$data,$cabecera = null){
            
            if(count($data) > 0 && is_string($url) && strlen($url) > 10){
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
                curl_setopt($ch, CURLOPT_POST, true);

                curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($data));
                if(count($cabecera) > 1 && $cabecera != null){
                    curl_setopt($ch, CURLOPT_HTTPHEADER, $cabecera);
                }
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

                $response = curl_exec($ch);
                if($response === false) {
                    // echo "Error en la solicitud POST: " . curl_error($ch);
                    return "error";
                }
                curl_close($ch);
                return $response;
            }
            return "error";
        }
        public function CONSULTA_POST_DA($url, $data, $cabecera = null) {
            if (count($data) > 0 && is_string($url) && strlen($url) > 10) {
                $ch = curl_init();
                
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POST, true);
                // curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
                // curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
                curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
                
                
                $cabecera1 = ['Content-Type: application/x-www-form-urlencoded'];

                // Agregar valores como cabeceras personalizadas
                if ($cabecera && is_array($cabecera)) {
                    foreach ($cabecera as $key => $value) {
                        $cabecera1[] = "$key: $value";
                    }
                    curl_setopt($ch, CURLOPT_HTTPHEADER, $cabecera1);
                }


                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
                $response = curl_exec($ch);
                if ($response === false) {
                    $error_message = curl_error($ch); 
                    $error_code = curl_errno($ch); 
                    curl_close($ch);
                    return ["error" => true, "message" => $error_message, "code" => $error_code];
                }
                curl_close($ch);
                return $response;
            }
        
            return ["error" => true, "message" => "Invalid data or URL"];
        }        
    }
?>