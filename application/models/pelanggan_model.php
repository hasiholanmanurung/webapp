<?php
    class Pelanggan_Model extends CI_Model{
        public function getAll(){
            // mengakses web service menggunakan HTTP request
            $api_url="http://localhost:8082/get";
            $svcGet =curl_init();
            curl_setopt_array($svcGet, array(
                CURLOPT_URL => $api_url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET'
            ));

            $response = json_decode(curl_exec($svcGet));
            curl_close($svcGet);
            // print_r($response);
            // die();
            return $response;
        }
    }
?>