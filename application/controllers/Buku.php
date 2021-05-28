<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

	public function index()
	{
        $data['title'] = ucwords('Daftar Buku');
        // melakukan load data yang ada pada folder model
        $this->load->model('buku_model');
        // mengambil data yang ada pada tabel buku 
        $data['data'] = $this->buku_model->getAll();

		$this->load->view('template/header');
		$this->load->view('buku/index', $data);
		$this->load->view('template/footer', $data);

	}

    public function view($judulBuku = NULL) {
		$data['title'] = ucwords('Detail Buku');

		if (is_null($judulBuku)) {
			show_404();
		}

		$this->load->model('buku_model');
		$data['data'] = $this->buku_model->getBukuByJudul($judulBuku);

		$this->load->view('template/header');
		$this->load->view('buku/view', $data);
		$this->load->view('template/footer', $data);
	}


}
