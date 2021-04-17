<?php

class gizi extends CI_Controller{

  public function index(){
    $data['gizi'] = $this->kesehatan_model->tampil_data('gizi')->result();
    $this->load->view('template/nakes/header');
    $this->load->view('template/nakes/sidebar');
    $this->load->view('nakes/gizi', $data);
    $this->load->view('template/nakes/footer');
  }

  public function tambah_gizi(){
   
    $data = array(
      'id_gizi' => set_value('id_gizi'),
      'id_posyandu' => set_value('id_posyandu'),
      'jenis' => set_value('jenis'),
      'tanggal'    => set_value('tanggal'),
      'keterangan'    => set_value('keterangan'),
      'gambar'   => set_value('gambar'),
      'status'   => set_value('status'),
    );

    $this->load->view('template/nakes/header');
    $this->load->view('template/nakes/sidebar');
    $this->load->view('nakes/gizi_form', $data);
    $this->load->view('template/nakes/footer');
  }

 

  public function tambah_gizi_aksi(){
    $this->_rules();

    if($this->form_validation->run() == FALSE){
      $this->tambah_gizi();
    }
    else{
      $data = array(
      'id_gizi'   => $this->input->post('id_gizi', TRUE),
      'id_posyandu'   => $this->input->post('id_posyandu', TRUE),
      'jenis'   => $this->input->post('jenis', TRUE),
      'tanggal'      => $this->input->post('tanggal', TRUE),
      'keterangan'      => $this->input->post('keterangan', TRUE),
      'gambar'     => $this->input->post('gambar', TRUE),
      'status'     => $this->input->post('status', TRUE),
            );

      $this->gizi_model->insert_data($data, 'gizi');
      $this->session->set_flashdata(
        'pesan',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
          Data user berhasil ditambahkan
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>'
      );
      redirect('nakes/gizi');
    }
  }
  public function update($id_gizi){
    $where = array('id_gizi'=>$id_gizi);

    $data['gizi'] = $this->kesehatan_model->edit_data($where, 'gizi')->result();
    $this->load->view('template/nakes/header');
    $this->load->view('template/nakes/sidebar');
    $this->load->view('nakes/gizi_update', $data);
    $this->load->view('template/nakes/footer');
  }

  public function update_aksi(){
    $id_gizi         = $this->input->post('id_gizi');
    $id_posyandu       = $this->input->post('id_posyandu');
    $jenis   = $this->input->post('jenis');
    $tanggal   = $this->input->post('tanggal');
    $keterangan     = $this->input->post('keterangan');
    $gambar      = $this->input->post('gambar');
    $status      = $this->input->post('status');

   
    
    $data = array(
      'id_gizi' => $id_gizi,
      'id_posyandu' => $id_posyandu,
      'jenis' => $jenis,
      'tanggal'    => $tanggal,
      'keterangan'    => $keterangan,
      'gambar'   => $gambar,
      'status'   => $status,
    );

    $where = array('id_gizi'=>$id_gizi);

    $this->kesehatan_model->update_data($where, $data, 'gizi');
    $this->session->set_flashdata(
      'pesan',
      '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data user berhasil diupdate
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
    );
    redirect('nakes/gizi');
  }

  public function hapus($id_gizi){
    $where = array('id_gizi' => $id_gizi);
    $this->gizi_model->hapus_data($where, 'gizi');
    $this->session->set_flashdata(
      'pesan',
      '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data user berhasil dihapus
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
    );
    redirect('nakes/gizi');
  }
  
  public function _rules(){
    $this->form_validation->set_rules('id_gizi', 'id_gizi', 'required', [
      'required' => 'id_gizi wajib diisi!'
    ]);
    $this->form_validation->set_rules('id_posyandu', 'id_posyandu', 'required', [
      'required' => 'id_posyandu wajib diisi!'
    ]);
    $this->form_validation->set_rules('jenis', 'jenis', 'required', [
      'required' => 'jenis wajib diisi!'
    ]);
    $this->form_validation->set_rules('tanggal', 'tanggal', 'required', [
      'required' => 'tanggal wajib diisi!'
    ]);
    $this->form_validation->set_rules('keterangan', 'keterangan', 'required', [
      'required' => 'keterangan wajib diisi!'
    ]);
    $this->form_validation->set_rules('gambar', 'gambar', 'required', [
      'required' => 'gambar wajib diisi!'
    ]);
    $this->form_validation->set_rules('status', 'status', 'required', [
        'required' => 'status wajib diisi!'
      ]);
  }

}