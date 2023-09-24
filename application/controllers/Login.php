<?php 

/**
 * 
 */
class Login extends CI_Controller
{
	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password','required');

		if ($this->form_validation->run() == False) {
			$data['judul'] = "Bacalah - Login"; 
			$this->load->view('login/index', $data);
		} 
		else{
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$data = [
				'username' => $username,
				'password' => $password
			];

			$user = $this->db->get_where('user', $data)->row_array();

			$userdata = [
				'username' => $username,
				'id' => $user['id']
			]; 

			$this->session->set_userdata($userdata);

			if ($user['role_id'] == "1") {
				$this->session->set_userdata('akses','1');
		            $this->session->set_userdata('ses_id',$data['username']);
		            $this->session->set_userdata('ses_nama',$data['username']);
				redirect('admin');
			} 
			else if($user['role_id'] == "2"){
				$this->session->set_userdata('akses','2');
		            $this->session->set_userdata('ses_id',$data['username']);
		            $this->session->set_userdata('ses_nama',$data['username']);
				redirect('user');
			}else{
				redirect('login');
			}

		}
	}

	public function logout()
	{
		redirect('login');
	}
}