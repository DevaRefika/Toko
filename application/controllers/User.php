<?php

/**
 * 
 */
class User extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Buku_model', 'buku');
		$this->load->model('Keranjang_model', 'keranjang');
	}

	public function index()
	{
		$data['buku'] = $this->buku->getAllBuku();
		$data['judul'] = "Toko Buku Bacalah";
		$this->load->view('templates/header', $data);
		$this->load->view('user/index', $data);
		$this->load->view('templates/footer');
	}

	public function detail()
	{
		$data['buku'] = $this->buku->getBukuById();
		$data['judul'] = "Detail Buku";
		$this->load->view('templates/header', $data);
		$this->load->view('user/detail', $data);
		$this->load->view('templates/footer');
	}

	public function keranjang()
	{
		$data['buku'] = $this->keranjang->insertKeranjang();
	}

	public function chart()
	{
		$data['keranjang'] = $this->keranjang->getKeranjang();
		$data['judul'] = "Keranjang Buku";
		$this->load->view('templates/header', $data);
		$this->load->view('user/keranjang', $data);
		$this->load->view('templates/footer', $data);
	}
	public function tambah()
	{
		$result = $this->buku->tambahBuku();

		if ($result) {
			redirect('admin');
		}
	}
	public function hapusKeranjang()
	{
		$id = $this->uri->segment(3);

		$this->db->where('id', $id);
		$this->db->delete('keranjang');

		redirect('user/chart');
	}
}

