<?php

class data_kes_lansia extends CI_Controller{

  public function index(){
    $data['data_kes_lansia'] = $this->kesehatan_model->tampil_data('data_kes_lansia')->result();
    $this->load->view('template/nakes/header');
    $this->load->view('template/nakes/sidebar');
    $this->load->view('nakes/data_kes_lansia', $data);
    $this->load->view('template/nakes/footer');
  }

  public function tambah_data_kes_lansia(){
    $data = array(
      'id_kesehatan' => set_value('id_kesehatan'),
      'id_lansia' => set_value('id_lansia'),
      'tanggal_cek'    => set_value('tanggal_cek'),
      'bb_lansia'    => set_value('bb_lansia'),
      'tensi_sistolik'   => set_value('tensi_sistolik'),
      'tensi_diastolik'   => set_value('tensi_diastolik'),
      'IMT'   => set_value('IMT'),
      'tinggi_badan'   => set_value('tinggi_badan'),
      'analisis_IMT'   => set_value('analisis_IMT'),
      'analisis_tensi'   => set_value('analisis_tensi'),
    );

    $this->load->view('template/nakes/header');
    $this->load->view('template/nakes/sidebar');
    $this->load->view('nakes/kesehatan_form', $data);
    $this->load->view('template/nakes/footer');
  }

 

  public function tambah_data_kes_lansia_aksi(){
    $this->_rules();

    if($this->form_validation->run() == FALSE){
      $this->tambah_data_kes_lansia();
    }
    else{
      $data = array(
      'id_kesehatan'   => $this->input->post('id_kesehatan', TRUE),
      'id_lansia'   => $this->input->post('id_lansia', TRUE),
      'tanggal_cek'      => $this->input->post('tanggal_cek', TRUE),
      'bb_lansia'      => $this->input->post('bb_lansia', TRUE),
      'tensi_sistolik'     => $this->input->post('tensi_sistolik', TRUE),
      'tensi_diastolik'     => $this->input->post('tensi_diastolik', TRUE),
      'IMT'     => $this->input->post('IMT', TRUE),
      'tinggi_badan'     => $this->input->post('tinggi_badan', TRUE),
      'analisis_IMT'     => $this->input->post('analisis_IMT', TRUE),
      'analisis_tensi'     => $this->input->post('analisis_tensi', TRUE),
            );

      $this->kesehatan_model->insert_data($data, 'data_kes_lansia');
      $this->session->set_flashdata(
        'pesan',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
          Data user berhasil ditambahkan
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>'
      );
      redirect('nakes/data_kes_lansia');
    }
  }
  public function update($id_kesehatan){
    $where = array('id_kesehatan'=>$id_kesehatan);

    $data['data_kes_lansia'] = $this->kesehatan_model->edit_data($where, 'data_kes_lansia')->result();
    $this->load->view('template/nakes/header');
    $this->load->view('template/nakes/sidebar');
    $this->load->view('nakes/kesehatan_update', $data);
    $this->load->view('template/nakes/footer');
  }

  public function update_aksi(){
    $id_kesehatan         = $this->input->post('id_kesehatan');
    $id_lansia   = $this->input->post('id_lansia');
    $tanggal_cek   = $this->input->post('tanggal_cek');
    $bb_lansia     = $this->input->post('bb_lansia');
    $tensi_sistolik      = $this->input->post('tensi_sistolik');
    $tensi_diastolik      = $this->input->post('tensi_diastolik');
    $tinggi_badan      = $this->input->post('tinggi_badan');
    $IMT      =$this->input->post('IMT');
    $analisis_IMT      = $this->input->post('analisis_IMT');
    $analisis_tensi     = $this->input->post('analisis_tensi');
   
    
    $data = array(
      'id_kesehatan' => $id_kesehatan,
      'id_lansia' => $id_lansia,
      'tanggal_cek'    => $tanggal_cek,
      'bb_lansia'    => $bb_lansia,
      'tensi_sistolik'   => $tensi_sistolik,
      'tensi_diastolik'   => $tensi_diastolik,
      'IMT'   =>$IMT,
      'tinggi_badan'   => $tinggi_badan,
      'analisis_IMT'   => $analisis_IMT,
      'analisis_tensi'   => $analisis_tensi,
    );

    $where = array('id_kesehatan'=>$id_kesehatan);

    $this->kesehatan_model->update_data($where, $data, 'data_kes_lansia');
    $this->session->set_flashdata(
      'pesan',
      '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data user berhasil diupdate
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
    );
    redirect('nakes/data_kes_lansia');
  }

  public function hapus($id_kesehatan){
    $where = array('id_kesehatan' => $id_kesehatan);
    $this->kesehatan_model->hapus_data($where, 'data_kes_lansia');
    $this->session->set_flashdata(
      'pesan',
      '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data user berhasil dihapus
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
    );
    redirect('nakes/data_kes_lansia');
  }
  
  public function _rules(){
    $this->form_validation->set_rules('id_kesehatan', 'id_kesehatan', 'required', [
      'required' => 'id_kesehatan wajib diisi!'
    ]);
    $this->form_validation->set_rules('id_lansia', 'id_lansia', 'required', [
      'required' => 'id_lansia wajib diisi!'
    ]);
    $this->form_validation->set_rules('tanggal_cek', 'tanggal_cek', 'required', [
      'required' => 'tanggal_cek wajib diisi!'
    ]);
    $this->form_validation->set_rules('bb_lansia', 'bb_lansia', 'required', [
      'required' => 'bb_lansia wajib diisi!'
    ]);
    $this->form_validation->set_rules('tensi_sistolik', 'tensi_sistolik', 'required', [
      'required' => 'tensi_sistolik wajib diisi!'
    ]);
    $this->form_validation->set_rules('tensi_diastolik', 'tensi_diastolik', 'required', [
        'required' => 'tensi_diastolik wajib diisi!'
      ]);
    $this->form_validation->set_rules('tinggi_badan', 'tinggi_badan', 'required', [
        'required' => 'tinggi_badan wajib diisi!'
      ]);
  }

}