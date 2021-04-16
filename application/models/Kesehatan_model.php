<?php

class Kesehatan_model extends CI_Model{

  public $table = 'data_kes_lansia';
  public $id_admin = 'id_kesehatan';

  public function ambil_data($id_kesehatan){
    $this->db->where('id_kesehatan', $id_kesehatan);
    return $this->db->get('data_kes_lansia')->row();
  }

  public function tampil_data($table){
    return $this->db->get($table);
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