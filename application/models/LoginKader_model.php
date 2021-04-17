<?php

class LoginKader_model extends CI_Model
{

	public function cek_login($username_kader, $pass_kader)
	{
		$this->db->where("username_kader", $username_kader);
		$this->db->where("pass_kader", $pass_kader);

		return $this->db->get('data_kader');
	}

	public function getLoginData($user, $pass, $lvl)
	{
		$u = $user;
		$p = $pass;



		$query_cekLogin = $this->db->get_where('data_kader', array('username_kader' => $u, 'pass_kader' => $p));
		if (count($query_cekLogin->result()) > 0) {
			foreach ($query_cekLogin->result() as $ck) {
				foreach ($query_cekLogin->result() as $ck) {
					$sess_data['logged_in'] = TRUE;
					$sess_data['username']  = $ck->username_kader;
					$sess_data['password']  = $ck->pass_kader;
					$sess_data['level']     = $ck->level;
					$this->session->set_userdata($sess_data);
				}
				redirect('kader1/dashboard');
			}
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
