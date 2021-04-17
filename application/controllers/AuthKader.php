<?php

class AuthKader extends CI_Controller
{

	public function index()
	{
		$this->load->view('template/admin/header');
		$this->load->view('kader1/login');
		$this->load->view('template/admin/footer');
	}

	public function proses_login()
	{

		$this->form_validation->set_rules('username_kader', 'Username', 'required', ['required' => 'Username wajib diisi']);
		$this->form_validation->set_rules('pass_kader', 'Password', 'required', ['required' => 'Password wajib diisi']);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('template/admin/header');
			$this->load->view('kader1/login');
			$this->load->view('template/admin/footer');
		} else {
			$username = $this->input->post('username_kader');
			$password = $this->input->post('pass_kader');
			$level = $this->input->post('level');

			$user = $username;
			$pass = $password;
			$lvl = $level;
			$cek = $this->loginkader_model->cek_login($user, $pass, $lvl);

			if ($cek->num_rows() > 0) {
				foreach ($cek->result() as $ck) {
					$sess_data['username'] = $ck->username_kader;
					$sess_data['password'] = $ck->pass_kader;
					$sess_data['level'] = $ck->level;

					$this->session->set_userdata($sess_data);
				}
				if ($sess_data['level'] == 'kader1') {
					redirect('kader1/dashboard');
				} else if ($sess_data['level'] == 'kader2') {
					redirect('kader2/dashboard');
				} else if ($sess_data['level'] == 'kader3') {
					redirect('kader3/dashboard');
				} else if ($sess_data['level'] == 'kader4') {
					redirect('kader4/dashboard');
				} else if ($sess_data['level'] == 'kader5') {
					redirect('kader5/dashboard');
				} else {
					$this->session->set_flashdata(
						'pesan',
						'<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Username atau password salah
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>


              
            </button>
          </div>'
					);
					redirect('authkader');
				}
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('AuthKader/proses_login', 'refresh');
	}
}
