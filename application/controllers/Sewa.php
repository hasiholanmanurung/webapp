<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sewa extends CI_Controller {

	//Constructor
	public function __construct() {
		parent::__construct();

        $this->load->model('buku_model');
        $this->load->model('pelanggan_model');
        $this->load->model('sewa_model');
	}

    // public function index() {
    //     $data['title']=ucwords('list penyewaan')	;     

    //     //Get Data Sewa
    //     $data['aSewa'] = $this->sewa_model->getAll();

    //     $this->load->view('template/header_sewa');
    //     $this->load->view('sewa/index', $data);
    //     $this->load->view('template/footer');        
    // }

	public function index($keywords = NULL) {
		if(!$this->session->userdata('username')){
			$this->session->set_flashdata('error',"Tidak dapat mengakses, Harap Login");

			redirect('login','refresh');
		}
        $data['title']=ucwords('list penyewaan');     

        //Get All / Filtered Data Sewa
        if ($keywords) {
            //Filtered Data
        }
        else{
            $data['aSewa'] = $this->sewa_model->getAll();
        }
        // $data['aSewa'] = $this->sewa_model->getSewaDetailById();
        // var_dump($data); die();

        $this->load->view('template/header_sewa');
        $this->load->view('sewa/index', $data);
        $this->load->view('template/footer');        
    }


	// public function view($idSewa = NULL) {
	// 	$data['title'] = ucwords('detil sewa');

	// 	if (is_null($idSewa)) {
	// 		show_404();
	// 	}

    //     //Get Data Sewa
    //     // $data['data'] = $this->sewa_model->get($idSewa);
    //     $data['data'] = $this->sewa_model->getSewaDetailById($idSewa);
    //     // var_dump($data); die();

    //     $this->load->view('template/header');
    //     // $this->load->view('sewa/view_detail', $data);
	// 	$this->load->view('sewa/view', $data);
	// 	$this->load->view('template/footer');   
    // }

	public function view($idSewa = NULL) {
		$data['title'] = ucwords('rincian sewa');

		if (is_null($idSewa)) {
			show_404();
		}

        //Get Data Sewa Pelanggan Detail
        $data['data'] = $this->sewa_model->getSewaDetailById($idSewa)[0];

        $this->load->view('template/header');
        $this->load->view('sewa/view', $data);
        // $this->load->view('sewa/view_detail', $data);
        $this->load->view('template/footer');   
    }

    // public function create() {
    //     $data['title']=ucwords('sewa buku');
    //     $data['datetime']=date('d-M-Y H:i', time());

	// 	// var_dump($data); die();
    //     //Get Data Buku
    //     $data['aBuku'] = $this->buku_model->getAll();

    //     //Get Data Pelanggan
    //     $data['aPelanggan'] = $this->pelanggan_model->getAll();
    //     // var_dump($data); //die();

	// 	$this->load->library('form_validation');
	// 	$this->form_validation->set_rules('isbn', 'ISBN', 'required');
	// 	$this->form_validation->set_rules('pelanggan', 'Pelanggan', 'required');
	// 	$this->form_validation->set_rules('lamaSewa', 'Lama Sewa', 'required');

	// 	if ($this->form_validation->run() === FALSE){        
    //         $this->load->view('template/header');
    //         $this->load->view('sewa/create', $data);
    //         $this->load->view('template/footer');
	// 	} else {
	// 		$result = $this->sewa_model->save();

	// 		// Menggunakan Session Message
	// 		// $this->session->set_flashdata(
	// 		// 	($result->status==200) ? 'success' : 'error',
	// 		// 	"<strong>Respond Status:</strong> $result->status<br />
	// 		// 		<strong>Respond Error:</strong> $result->error<br />
	// 		// 		<strong>Message:</strong> $result->message"
	// 		// );

	// 		redirect('sewa');	//Jika Sukses kembali ke Index Pelanggan, jika Tidak kembali ke Form
	// 	}
    // }

	public function create() {
		if($this->session->userdata('role')<>'write') {
			$this->session->set_flashdata('error',"Access Unauthorized! Admin Only.");
			redirect('Salam','refresh');
		}
		
        $data['title']=ucwords('sewa buku');
        $data['datetime']=date('d-M-Y H:i', time());

        //Get Data Buku
        $data['aBuku'] = $this->buku_model->getAll();

        //Get Data Pelanggan
        $data['aPelanggan'] = $this->pelanggan_model->getAll();
        // var_dump($data); //die();

		$this->load->library('form_validation');
		$this->form_validation->set_rules('isbn', 'ISBN', 'required');
		$this->form_validation->set_rules('pelanggan', 'Pelanggan', 'required');
		$this->form_validation->set_rules('lamaSewa', 'Lama Sewa', 'required');

		if ($this->form_validation->run() === FALSE){        
            $this->load->view('template/header');
            $this->load->view('sewa/create', $data);
            $this->load->view('template/footer');
		} else {
			$result = $this->sewa_model->save();

			redirect('sewa');	//Jika Sukses kembali ke Index Pelanggan, jika Tidak kembali ke Form
		}
    }

	// public function delete($idSewa = NULL) {
	// 	if (is_null($idSewa)) {
	// 		$this->session->set_flashdata('error',"Sewa belum dipilih");
	// 	}

	// 	$result = $this->sewa_model->delete($idSewa);

	// 	$this->session->set_flashdata(
	// 		($result->status==200) ? 'success' : 'error',
	// 		"<strong>Respond Status:</strong> $result->status<br />
	// 		<strong>Respond Error:</strong> $result->error<br />
	// 		<strong>Message:</strong> $result->message"
	// 	);

	// 	redirect('sewa/');
	// }

	public function delete($idSewa = NULL) {
		if($this->session->userdata('role')<>'write') {
			$this->session->set_flashdata('error',"Access Unauthorized! Admin Only.");
			redirect('Salam','refresh');
		}
		
		if (is_null($idSewa)) {
			$this->session->set_flashdata('error',"Sewa belum dipilih");
		}

		$result = $this->sewa_model->delete($idSewa);

		$this->session->set_flashdata(
			($result->status==200) ? 'success' : 'error',
			"<strong>Respond Status:</strong> $result->status<br />
			<strong>Respond Error:</strong> $result->error<br />
			<strong>Message:</strong> $result->message"
		);

		redirect('sewa/');
	}

}