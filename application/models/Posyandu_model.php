<?php

class Posyandu_model extends CI_Model{

  public $table = 'data_posyandu';
  public $id_posyandu = 'id_posyandu';

  public function ambil_data($id_posyandu){
    $this->db->where('id_posyandu', $id_posyandu);
    return $this->db->get('data_posyandu')->row();
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
    $this->db->update($table, $data);
  }

  public function hapus_data($where, $table){
    $this->db->where($where);
    $this->db->delete($table);
  }

}