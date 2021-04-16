<?php

class data_puskesmas extends CI_Controller{

public function index(){
  $data['data_puskesmas'] = $this->puskesmas_model->tampil_data('data_puskesmas')->result();
  $this->load->view('template/admin/header');
  $this->load->view('template/admin/sidebar');
  $this->load->view('administrator/data_puskesmas', $data);
  $this->load->view('template/admin/footer');
}

public function tambah_data_puskesmas(){
  $data = array(
    'id_admin' => set_value('id_admin'),
    'nama_admin' => set_value('nama_admin'),
    'username'    => set_value('username'),
    'password'    => set_value('password'),
    'id_role'   => set_value('id_role'),
  );

  $this->load->view('template/admin/header');
  $this->load->view('template/admin/sidebar');
  $this->load->view('administrator/puskesmas_form', $data);
  $this->load->view('template/admin/footer');
}



public function tambah_data_puskesmas_aksi(){
  $this->_rules();

  if($this->form_validation->run() == FALSE){
    $this->tambah_data_puskesmas();
  }
  else{
    $data = array(
    'id_admin'   => $this->input->post('id_admin', TRUE),
    'nama_admin'   => $this->input->post('nama_admin', TRUE),
    'username'      => $this->input->post('username', TRUE),
    'password'      => $this->input->post('password', TRUE),
    'id_role'     => $this->input->post('id_role', TRUE),
      
    );

    $this->user_model->insert_data($data, 'data_puskesmas');
    $this->session->set_flashdata(
      'pesan',
      '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data user berhasil ditambahkan
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
    );
    redirect('administrator/data_puskesmas');
  }
}
public function update($id_admin){
  $where = array('id_admin'=>$id_admin);

  $data['data_puskesmas'] = $this->user_model->edit_data($where, 'data_puskesmas')->result();
  $this->load->view('template/admin/header');
  $this->load->view('template/admin/sidebar');
  $this->load->view('administrator/puskesmas_update', $data);
  $this->load->view('template/admin/footer');
}

public function update_aksi(){
  $id_admin         = $this->input->post('id_admin');
  $nama_admin   = $this->input->post('nama_admin');
  $username   = $this->input->post('username');
  $password      = $this->input->post('password');
  $id_role      = $this->input->post('id_role');
  
  $data = array(
    'id_admin' => $id_admin,
    'nama_admin' => $nama_admin,
    'username'    => $username,
    'password'    => $password,
    'id_role'   => $id_role,
  );

  $where = array('id_admin'=>$id_admin);

  $this->user_model->update_data($where, $data, 'data_puskesmas');
  $this->session->set_flashdata(
    'pesan',
    '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Data user berhasil diupdate
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>'
  );
  redirect('administratir/data_puskesmas');
}

public function hapus($id_admin){
  $where = array('id_admin' => $id_admin);
  $this->puskesmas_model->hapus_data($where, 'data_puskesmas');
  $this->session->set_flashdata(
    'pesan',
    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      Data user berhasil dihapus
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>'
  );
  redirect('administrator/data_puskesmas');
}

public function _rules(){
  $this->form_validation->set_rules('id_admin', 'id_admin', 'required', [
    'required' => 'id_admin wajib diisi!'
  ]);
  $this->form_validation->set_rules('nama_admin', 'nama_admin', 'required', [
    'required' => 'nama_admin wajib diisi!'
  ]);
  $this->form_validation->set_rules('username', 'username', 'required', [
    'required' => 'username wajib diisi!'
  ]);
  $this->form_validation->set_rules('password', 'password', 'required', [
    'required' => 'password wajib diisi!'
  ]);
  $this->form_validation->set_rules('id_role', 'id_role', 'required', [
    'required' => 'id_role wajib diisi!'
  ]);
}

}