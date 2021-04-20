<?php

class Jadwal_model extends CI_Model{

  public $table = 'jadwal_kegiatan';
  public $id_admin = 'id_jadwal';

  public function ambil_data($id_jadwal){
    $this->db->where('id_jadwal', $id_jadwal);
    return $this->db->get('jadwal_kegiatan')->row();
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
  public function get_product_keyword($keyword){
    $this->db->select('*');
    $this->db->from('jadwal_kegiatan');
    $this->db->like('id_jadwal',$keyword);
    $this->db->or_like('kegiatan',$keyword);
    return $this->db->get()->result();
  }

}