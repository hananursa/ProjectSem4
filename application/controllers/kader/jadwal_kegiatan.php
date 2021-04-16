<?php

class jadwal_kegiatan extends CI_Controller{

  public function index(){
    $data['jadwal_kegiatan'] = $this->jadwal_model->tampil_data('jadwal_kegiatan')->result();
    $this->load->view('Template/Kader/header_kader',$data);
    $this->load->view('kader/jadwal_kegiatan', $data);
    $this->load->view('Template/Kader/footer_kader',$data);

  }


  public function update($id_jadwal){
    $where = array('id_jadwal'=>$id_jadwal);

    $data['jadwal_kegiatan'] = $this->user_model->edit_data($where, 'jadwal_kegiatan')->result();
    $this->load->view('Template/Kader/header_kader',$data);
    $this->load->view('kader/jadwal_kegiatan', $data);
    $this->load->view('Template/Kader/footer_kader',$data);
  }

  public function update_aksi(){
    $id_jadwal         = $this->input->post('id_jadwal');
    $id_lansia   = $this->input->post('id_lansia');
    $kegiatan   = $this->input->post('kegiatan');
    $waktu      = $this->input->post('waktu');
    $keterangan      = $this->input->post('keterangan');
    $gambar      = $this->input->post('gambar');
    
    $data = array(
      'id_jadwal' => $id_jadwal,
      'id_lansia' => $id_lansia,
      'kegiatan'    => $kegiatan,
      'waktu'    => $waktu,
      'keterangan'   => $keterangan,
      'gambar'   => $gambar,
    );

    $where = array('id_jadwal'=>$id_jadwal);

    $this->jadwal_model->update_data($where, $data, 'jadwal_kegiatan');
    $this->session->set_flashdata(
      'pesan',
      '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data user berhasil diupdate
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
    );
    redirect('kader/jadwal_kegiatan');
  }

  public function _rules(){
    $this->form_validation->set_rules('id_jadwal', 'id_jadwal', 'required', [
      'required' => 'id_admin wajib diisi!'
    ]);
    $this->form_validation->set_rules('id_lansia', 'id_lansia', 'required', [
      'required' => 'nama_admin wajib diisi!'
    ]);
    $this->form_validation->set_rules('kegiatan', 'kegiatan', 'required', [
      'required' => 'username wajib diisi!'
    ]);
    $this->form_validation->set_rules('waktu', 'waktu', 'required', [
      'required' => 'password wajib diisi!'
    ]);
    $this->form_validation->set_rules('keterangan', 'keterangan', 'required', [
      'required' => 'id_role wajib diisi!'
    ]);
    $this->form_validation->set_rules('gambar', 'gambar', 'required', [
      'required' => 'gambar wajib diisi!'
    ]);
  }

}