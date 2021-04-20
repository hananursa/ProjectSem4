<?php


class data_kader extends CI_Controller{

  public function index(){
    $data['data_kader'] = $this->kader_model->tampil_data('data_kader')->result();
    $this->load->view('template/admin/header');
    $this->load->view('template/admin/sidebar');
    $this->load->view('administrator/data_kader', $data);
    $this->load->view('template/admin/footer');
  }

  public function tambah_data_kader(){
    $data = array(
      'id_posyandu' => set_value('id_posyandu'),
      'nama_kader' => set_value('nama_kader'),
      'username_kader' => set_value('username_kader'),
      'pass_kader' => set_value('pass_kader'),
      'no_hp' => set_value('no_hp'),
      'level' => set_value('level'),
    );

    $this->load->view('template/admin/header');
    $this->load->view('template/admin/sidebar');
    $this->load->view('administrator/kader_form', $data);
    $this->load->view('template/admin/footer');
  }

 

  public function tambah_data_kader_aksi(){
    $this->_rules();

    if($this->form_validation->run() == FALSE){
      $this->tambah_data_kader();
    }
    else{
      $data = array(
      'id_kader'   => $this->input->post('id_kader', TRUE),
      'id_posyandu'   => $this->input->post('id_posyandu', TRUE),
      'nama_kader'   => $this->input->post('nama_kader', TRUE),
      'username_kader'   => $this->input->post('username_kader', TRUE),
      'pass_kader'   => $this->input->post('pass_kader', TRUE),
      'no_hp'   => $this->input->post('no_hp', TRUE),
        
      );

      $this->user_model->insert_data($data, 'data_kader');
      $this->session->set_flashdata(
        'pesan',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
          Data user berhasil ditambahkan
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>'
      );
      redirect('administrator/data_kader');
    }
  }
  public function update($id_admin){
    $where = array('id_admin'=>$id_admin);

    $data['data_kader'] = $this->user_model->edit_data($where, 'data_kader')->result();
    $this->load->view('template/admin/header');
    $this->load->view('template/admin/sidebar');
    $this->load->view('administrator/kader_update', $data);
    $this->load->view('template/admin/footer');
  }

  public function update_aksi(){
    $id_kader = $this->input->post('id_kader');
    $id_posyandu = $this->input->post('id_posyandu');
    $nama_kader = $this->input->post('nama_kader');
    $username_kader = $this->input->post('username_kader');
    $pass_kader = $this->input->post('pass_kader');
    $no_hp = $this->input->post('no_hp');

    
    $data = array(
      'id_kader' => $id_kader,
      'id_posyandu' => $id_posyandu,
      'nama_kader' => $nama_kader,
      'username_kader' => $username_kader,
      'pass_kader' => $pass_kader,
      'no_hp' => $no_hp,
    );

    $where = array('id_kader'=>$id_kader);

    $this->user_model->update_data($where, $data, 'data_kader');
    $this->session->set_flashdata(
      'pesan',
      '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data user berhasil diupdate
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
    );
    redirect('administratir/data_kader');
  }

  public function hapus($id_admin){
    $where = array('id_admin' => $id_admin);
    $this->kader_model->hapus_data($where, 'data_kader');
    $this->session->set_flashdata(
      'pesan',
      '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data user berhasil dihapus
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
    );
    redirect('administrator/data_kader');
  }

  public function _rules(){
    $this->form_validation->set_rules('id_posyandu', 'id_posyandu', 'required', [
      'required' => 'id_posyandu wajib diisi!'
    ]);
    $this->form_validation->set_rules('nama_kader', 'nama_kader', 'required', [
      'required' => 'nama_kader wajib diisi!'
    ]);
    $this->form_validation->set_rules('username_kader', 'username_kader', 'required', [
      'required' => 'username_kader wajib diisi!'
    ]);
    $this->form_validation->set_rules('pass_kader', 'pass_kader', 'required', [
      'required' => 'pass_kader wajib diisi!'
    ]);
    $this->form_validation->set_rules('no_hp', 'no_hp', 'required', [
      'required' => ' wajib diisi!'
    ]);
  }

}