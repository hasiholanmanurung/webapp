<?php
    class Pelanggan_Model extends CI_Model{
        public function getAll(){
            // mengakses web service menggunakan HTTP request
            $api_url="http://localhost:8081/get";
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

        // $data['data'] = $this->pelanggan_model->getPelangganById($idPelanggan);

        public function getPelangganById($idPelanggan) {
            //Mengakses Web Service menggunakan HTTP Request
            $api_url = "http://localhost:8081/getsid/$idPelanggan";

            // var_dump($api_url);
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

        public function addPelanggan() {
            $api_url = "http://localhost:8081/create";

            $data = array(
                'kodepel' => $this->input->post('kodepel', true),
                'nama' => $this->input->post('nama', true),
                // 'alamat' => $this->input->post('alamat', true),
                'telp' => $this->input->post('telp', true),
                'jk' => $this->input->post('jk', true),
                'email' => $this->input->post('email', true)
            );

            $svcGet = curl_init();

            curl_setopt_array($svcGet, array(
                CURLOPT_URL => $api_url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => json_encode($data),
                CURLOPT_HTTPHEADER => array('Content-Type: application/json')
            ));

            $response = json_decode(curl_exec($svcGet));

            curl_close($svcGet);

            if (!is_null($response))            
                return $response;
            else
                show_404();            
        }


        public function editPelanggan($idPelanggan) {
            //Mengakses Web Service menggunakan HTTP Request
            $api_url = "http://localhost:8081/edit/$idPelanggan";

            $data = array(
                'id' => $this->input->post('id', true),
                'kodepel' => $this->input->post('kodepel', true),
                'nama' => $this->input->post('nama', true),
                'telp' => $this->input->post('telp', true),
                'jk' => $this->input->post('jk', true),
                'email' => $this->input->post('email', true)
                );

            $svcGet = curl_init();

            curl_setopt_array($svcGet, array(
                CURLOPT_URL => $api_url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'PUT',
                CURLOPT_POSTFIELDS => json_encode($data),
                CURLOPT_HTTPHEADER => array('Content-Type: application/json')
            ));

            $response = json_decode(curl_exec($svcGet));

            curl_close($svcGet);

            // var_dump($response);
            if (!is_null($response))            
                return $response;
            else
                show_404();

        }

        public function deletePelanggan($idPelanggan) {
            //Mengakses Web Service menggunakan HTTP Request
            $api_url = "http://localhost:8081/delete/$idPelanggan";

            $svcGet = curl_init();

            curl_setopt_array($svcGet, array(
                CURLOPT_URL => $api_url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'DELETE'
            ));

            $response = json_decode(curl_exec($svcGet));

            curl_close($svcGet);

            if (!is_null($response))            
                return $response;
            else
                show_404();
        }

        

    }
    
?>