<?php

class LoginKader_model extends CI_Model
{

	public function cek_login($username_kader, $pass_kader)
	{
		$this->db->where("username_kader", $username_kader);
		$this->db->where("pass_kader", $pass_kader);

		return $this->db->get('data_kader')->row();
	}
}
