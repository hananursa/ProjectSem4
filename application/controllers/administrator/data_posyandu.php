<?php

class data_posyandu extends CI_Controller{

  public function index(){
    $data['data_posyandu'] = $this->posyandu_model->tampil_data('data_posyandu')->result();
    $this->load->view('template/admin/header');
    $this->load->view('template/admin/sidebar');
    $this->load->view('administrator/data_posyandu', $data);
    $this->load->view('template/admin/footer');
  }

  public function tambah_data_posyandu(){
    $data = array(
      // 'id_posyandu' => set_value('id_posyandu'),
      'nama_posyandu' => set_value('nama_posyandu'),
      'nama_ketua' => set_value('nama_ketua'),
      'jumlah_kader' => set_value('jumlah_kader'),
    );

    $this->load->view('template/admin/header');
    $this->load->view('template/admin/sidebar');
    $this->load->view('administrator/posyandu_form', $data);
    $this->load->view('template/admin/footer');
  }

  public function tambah_data_posyandu_aksi(){
    $this->_rules();

    if($this->form_validation->run() == FALSE){
      $this->tambah_data_posyandu();
    }
    else{
      $data = array(
      // 'id_posyandu'   => $this->input->post('id_posyandu', TRUE),
      'nama_posyandu'   => $this->input->post('nama_posyandu', TRUE),
      'nama_ketua'   => $this->input->post('nama_ketua', TRUE),
      'jumlah_kader'   => $this->input->post('jumlah_kader', TRUE)
      );

      $this->user_model->insert_data($data, 'data_posyandu');
      $this->session->set_flashdata(
        'pesan',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
          Data user berhasil ditambahkan
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>'
      );
      redirect('administrator/data_posyandu');
    }
  }
  public function update($id_posyandu){
    $where = array('id_posyandu'=>$id_posyandu);

    $data['data_posyandu'] = $this->user_model->edit_data($where, 'data_posyandu')->result();
    $this->load->view('template/admin/header');
    $this->load->view('template/admin/sidebar');
    $this->load->view('administrator/posyandu_update', $data);
    $this->load->view('template/admin/footer');
  }

  public function update_aksi(){
    $id_posyandu = $this->input->post('id_posyandu');
    $nama_posyandu = $this->input->post('nama_posyandu');
    $nama_ketua = $this->input->post('nama_ketua');
    $jumlah_kader = $this->input->post('jumlah_kader');

    $data = array(
      // 'id_posyandu' => $id_posyandu,
      'nama_posyandu' => $nama_posyandu,
      'nama_ketua' => $nama_ketua,
      'jumlah_kader' => $jumlah_kader,
    
    );

    $where = array('id_posyandu'=>$id_posyandu);

    $this->user_model->update_data($where, $data, 'data_posyandu');
    $this->session->set_flashdata(
      'pesan',
      '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data user berhasil diupdate
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
    );
    redirect('administrator/data_posyandu');
  }

  public function hapus($id_posyandu){
    $where = array('id_posyandu' => $id_posyandu);
    $this->posyandu_model->hapus_data($where,'data_posyandu');
    $this->session->set_flashdata(
      'pesan',
      '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data user berhasil dihapus
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
    );
    redirect('administrator/data_posyandu');
  }

  public function _rules(){
    // $this->form_validation->set_rules('id_posyandu', 'id_posyandu', 'required', [
    //   'required' => 'id_posyandu wajib diisi!'
    // ]);
    $this->form_validation->set_rules('nama_posyandu', 'nama_posyandu', 'required', [
      'required' => 'nama_posyandu wajib diisi!'
    ]);
    $this->form_validation->set_rules('nama_ketua', 'nama_ketua', 'required', [
      'required' => 'nama_ketua wajib diisi!'
    ]);
    $this->form_validation->set_rules('jumlah_kader', 'jumlah_kader', 'required', [
      'required' => 'jumlah_kader wajib diisi!'
    ]);
  }

}