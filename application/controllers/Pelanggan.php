<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	public function index()
	{
        $data['title'] = ucwords('Daftar Pelanggan');
        $this->load->model('pelanggan_model');
        $data['data'] = $this->pelanggan_model->getAll();

		$this->load->view('pelanggan/index', $data);
	}

}
