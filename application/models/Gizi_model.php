<?php

class Gizi_model extends CI_Model{

  public $table = 'gizi';
  public $id_gizi = 'id_gizi';

  public function ambil_data($id_gizi){
    $this->db->where('id_gizi', $id_gizi);
    return $this->db->get('gizi')->row();
  }

  public function tampil_data($table){
    return $this->db->get($table);
  }

  public function tampil_data_kader()
  {
    $this->db->where('id_posyandu', $this->session->id_posyandu);
    return $this->db->get('gizi')->result();
  }

  public function insert_data($data, $table){
    $this->db->insert($table, $data);
  }

  public function edit_data($where, $table){
    return $this->db->get_where($table, $where);
  }

  public function update_data($where, $data, $table){
    $this->db->where($where);
    $this->db->update($table, $data);
  }

  public function hapus_data($where, $table){
    $this->db->where($where);
    $this->db->delete($table);
  }

}