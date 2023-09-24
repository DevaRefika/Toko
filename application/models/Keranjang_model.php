<?php 

/**
 * 
 */
class Keranjang_model extends CI_Model
{
	public function insertKeranjang()
	{

		$id_buku = $this->uri->segment(3);
		$id_user = $this->session->userdata('id');

		$buku = $this->db->get_where('keranjang', ['id_buku' => $id_buku])->row_array();

		if ($buku != null) {
			redirect('user');
			die();
		} else{
			$this->db->insert('keranjang', ['id_buku' => $id_buku, 'id_user' => $id_user]);
			redirect('user/chart');
		}
	}

	public function getKeranjang()
	{
		$id_user = $this->session->userdata('id');

		$query = "SELECT * FROM buku JOIN keranjang 
			on buku.id = keranjang.id_buku 
			WHERE keranjang.id_user = '$id_user'";

		return $this->db->query($query)->result_array();
	}
}
