<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

	public function index()
	{
		$data['judul'] = "Detail Buku";
		$this->load->view('templates/header', $data);
		$this->load->view('detail/index');
		$this->load->view('templates/footer');
	}

}
