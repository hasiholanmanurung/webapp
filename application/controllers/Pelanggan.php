<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	//Constructor
	public function __construct() {
		parent::__construct();

		$this->load->model('pelanggan_model'); //Bisa diautoload di config/autoload.php
	}

	public function index()
	{
        $data['title'] = ucwords('Data Pelanggan');

        $data['data'] = $this->pelanggan_model->getAll();

		$this->load->view('template/header_pelanggan');
		$this->load->view('pelanggan/index', $data);
		$this->load->view('template/footer');
	}

	public function view($idPelanggan = NULL) {
		$data['title'] = ucwords('Deskripsi Pelanggan');

		if (is_null($idPelanggan)) {
			show_404();
		}

		$data['data'] = $this->pelanggan_model->getPelangganById($idPelanggan);
		// var_dump($data);

		$this->load->view('template/header');
		$this->load->view('pelanggan/view', $data);
		$this->load->view('template/footer');
	}

	public function create() {
		$data['title'] = ucwords('Tambah Pelanggan');

		//Load Library untuk Form Validation
		$this->load->library('form_validation');

		//Menentukan Rules dari Form Validation untuk setiap elemen form sesuai kebutuhan
		$this->form_validation->set_rules('kodepel', 'kodepel', 'required');
		$this->form_validation->set_rules('nama', 'nama', 'required');
		// $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('telp', 'telp', 'required');
        $this->form_validation->set_rules('jk', 'jk', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');

		/* Periksa kesesuai Form terhadap Rules:
		*	Jika belum, maka dikembalikan lagi ke Form beserta Error-nya
		*	Jika sudah, maka dilanjutkan proses data
		*/		
		if ($this->form_validation->run() === FALSE){
			$this->load->view('template/header');
			$this->load->view('pelanggan/create', $data);
			$this->load->view('template/footer');
		} else {
			// print_r("Form Data sudah benar");
			$result = $this->pelanggan_model->addPelanggan();         //Proses postingan baru

			// Menggunakan Session Message
			$this->session->set_flashdata(
				($result->status==200) ? 'success' : 'error',
				"<strong>Respond Status:</strong> $result->status<br />
				<strong>Respond Error:</strong> $result->error<br />
				<strong>Message:</strong> $result->message"
			);

			redirect(($result->status==200) ? 'pelanggan/index' : 'pelanggan/create');	//Jika Sukses kembali ke Index Pelanggan, jika Tidak kembali ke Form
		}
	}


	public function edit($idPelanggan) {
		if (is_null($idPelanggan)) {
			$this->session->set_flashdata('error',"Data belum dipilih");
		}

		//Ambil data yg mau di Edit
		$data['data'] = $this->pelanggan_model->getPelangganById($idPelanggan);

		//Load Library untuk Form Validation
		$this->load->library('form_validation');

		//Menentukan Rules dari Form Validation untuk setiap elemen form sesuai kebutuhan
		$this->form_validation->set_rules('kodepel', 'Kode Pelajaran', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('telp', 'Telphone', 'required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');		
		$this->form_validation->set_rules('email', 'Email', 'required');

		/* Periksa kesesuai Form terhadap Rules:
		*	Jika belum, maka dikembalikan lagi ke Form beserta Error-nya
		*	Jika sudah, maka dilanjutkan proses data
		*/		
		if ($this->form_validation->run() === FALSE){
			$data['title'] = ucwords('edit data pelanggan');

			$this->load->view('template/header');
			$this->load->view('pelanggan/edit', $data);
			$this->load->view('template/footer');
		} else {
			//Simpan data baru
			$result = $this->pelanggan_model->editPelanggan($idPelanggan);

			$this->session->set_flashdata(
				($result->status==200) ? 'success' : 'error',
				"<strong>Respond Status:</strong> $result->status<br />
				<strong>Respond Error:</strong> $result->error<br />
				<strong>Message:</strong> $result->message"
			);

			redirect(($result->status==200) ? "pelanggan/index" : "pelanggan/edit/$idPelanggan");	//Jika Sukses kembali ke Index Pelanggan, jika Tidak kembali ke Form
		}
	}

	public function delete($idPelanggan = NULL) {
		if (is_null($idPelanggan)) {
			$this->session->set_flashdata('error',"Data belum dipilih");
		}

		$result = $this->pelanggan_model->deletePelanggan($idPelanggan);

		$this->session->set_flashdata(
			($result->status==200) ? 'success' : 'error',
			"<strong>Respond Status:</strong> $result->status<br />
			<strong>Respond Error:</strong> $result->error<br />
			<strong>Message:</strong> $result->message"
		);

		redirect('pelanggan/index');
	}

}
