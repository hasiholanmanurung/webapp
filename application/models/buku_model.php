<?php
    class Buku_Model extends CI_Model{
        public function getAll(){
            // mengakses web service menggunakan HTTP request
            $api_url="http://localhost:8085/gets";
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

            if(!is_null($response))
                return $response;
            else
                show_404();
            
        }

        // public function getBukuByJudul($judulBuku){
        //     // mengakses web service menggunakan HTTP request
        //     $api_url = "http://localhost:8085/buku/get/$judulBuku";
        //     $svcGet =curl_init();
        //     curl_setopt_array($svcGet, array(
        //         CURLOPT_URL => $api_url,
        //         CURLOPT_RETURNTRANSFER => true,
        //         CURLOPT_FOLLOWLOCATION => true,
        //         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //         CURLOPT_CUSTOMREQUEST => 'GET'
        //     ));

        //     $response = json_decode(curl_exec($svcGet));

        //     curl_close($svcGet);
        //     // print_r($response);
        //     // die();

        //     if(!is_null($response))
        //         return $response;
        //     else
        //         show_404();
            
        // }  
        public function getBukuByJudul($judulBuku) {
            //Mengakses Web Service menggunakan HTTP Request
            $api_url = "http://localhost:8085/get/$judulBuku";
            $svcGet = curl_init();

            curl_setopt_array($svcGet, array(
                CURLOPT_URL => $api_url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET'
            ));

            $response = json_decode(curl_exec($svcGet));
            // var_dump($response); die();

            curl_close($svcGet);

            if (!is_null($response))            
                return $response;
            else
                show_404();
        }


    }
?>