<?php

class Lansia_model extends CI_Model
{

  public $table = 'data_lansia';
  public $id_admin = 'id_lansia';

  public function ambil_data($id_lansia)
  {
    $this->db->where('id_lansia', $id_lansia);
    return $this->db->get('data_lansia')->row();
  }

  public function tampil_data($table)
  {
    return $this->db->get($table);
  }

  public function tampil_data_kader()
  {
    $this->db->where('id_posyandu', $this->session->id_posyandu);
    return $this->db->get('data_lansia')->result();
  }

  public function insert_data($data, $table)
  {
    $this->db->insert($table, $data);
  }

  public function edit_data($where, $table)
  {
    return $this->db->get_where($table, $where);
  }

  public function update_data($where, $data, $table)
  {
    $this->db->where($where);
    $this->db->update($table, $data);
  }

  public function hapus_data($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }
}
