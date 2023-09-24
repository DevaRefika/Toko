<?php

/**
 * 
 */
class Home extends CI_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
	}

	public function index()
	{
		$data['judul'] = "Toko Buku Bacalah";
		$this->load->view('templates/header', $data);
		$this->load->view('home/index');
		$this->load->view('templates/footer');
	}
}

