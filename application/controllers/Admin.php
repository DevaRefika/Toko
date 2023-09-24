<?php

/**
 * 
 */
class Admin extends CI_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model('Buku_model', 'buku');
	}

	public function index()
	{
		$data['buku'] = $this->buku->getAllBuku();
		$data['judul'] = "Toko Buku Bacalah";
		$this->load->view('templates/header', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('templates/footer', $data);
	}

	public function tambah()
	{
		$result = $this->buku->tambahBuku();

		if ($result) {
			redirect('admin');
		}
	}

	public function hapus()
	{
		$result = $this->buku->hapusBuku();

		if ($result) {
			redirect('admin');
		}
	}

}

