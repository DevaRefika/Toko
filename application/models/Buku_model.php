<?php 

/**
 * 
 */
class Buku_model extends CI_Model
{
	
	public function getAllBuku()
	{
		return $this->db->get('buku')->result_array();
	}

	public function tambahBuku()
	{
		$judul = $this->input->post('judul', true);
		$penulis = $this->input->post('penulis', true);
		$penerbit = $this->input->post('penerbit', true);
		$deskripsi = $this->input->post('deskripsi', true);
		$harga = $this->input->post('harga', true);
		$stok = $this->input->post('stok', true);

		// cek jika ada gambar yang akan diupload
        $upload_image = $_FILES['gambar']['name'];

        if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/img/buku/';

                $this->load->library('upload', $config);

                $this->upload->do_upload('gambar');
                  
            }

		$data = [
			'judul' => $judul,
			'penulis' => $penulis,
			'penerbit' => $penerbit,
			'deskripsi' => $deskripsi,
			'harga' => $harga,
			'stok' => $stok,
			'gambar' => $upload_image
		];

		return $this->db->insert('buku', $data);
	}

	public function hapusBuku()
	{
		$id = $this->uri->segment(3);
		$this->db->where('id', $id);
		return $this->db->delete('buku');
	}

	public function getBukuById()
	{
		$id = $this->uri->segment(3);
		return $this->db->get_where('buku', ['id' => $id])->row_array();
	}
}