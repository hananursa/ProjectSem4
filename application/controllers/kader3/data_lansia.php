<?php

class data_lansia extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Lansia_model');

    }

  public function index(){
    $data['data_lansia'] = $this->Lansia_model->tampil_data('data_lansia')->result();
    $data['title'] = 'Data Lansia';
    $this->load->view('Template/Kader3/header_kader',$data);
    $this->load->view('Kader3/data_lansia',$data);
    $this->load->view('Template/Kader3/footer_kader',$data);
  }

  public function tambah_data_lansia(){
    $data['jenis_kelamin']=['laki','perempuan'];
    $data = array(
      'id_lansia' => set_value('id_lansia'),
      'id_posyandu' => set_value('id_posyandu'),
      'nama_lansia'    => set_value('nama_lansia'),
      'tanggal_lahir'   => set_value('tanggal_lahir'),
      'umur'   => set_value('umur'),
      'jenis_kelamin'   => set_value('jenis_kelamin'),
      'alamat'   => set_value('alamat'),
    );
    $this->load->view('Template/Kader3/header_kader',$data);
    $this->load->view('Kader3/lansia_form',$data);
    $this->load->view('Template/Kader3/footer_kader',$data);
  } 

  public function tambah_data_lansia_aksi(){
    $this->_rules();

    if($this->form_validation->run() == FALSE){
      $this->tambah_data_lansia();
    }
    else{
      $data = array(
      'id_lansia'   => $this->input->post('id_lansia', TRUE),
      'id_posyandu'   => $this->input->post('id_posyandu', TRUE),
      'nama_lansia	'   => $this->input->post('nama_lansia', TRUE),
      'tanggal_lahir'   => $this->input->post('tanggal_lahir', TRUE),
      'umur'   => $this->input->post('umur', TRUE),
      'jenis_kelamin	'   => $this->input->post('jenis_kelamin', TRUE),
      'alamat'   => $this->input->post('alamat', TRUE),
            );

      $this->Lansia_model->insert_data($data, 'data_lansia');
      $this->session->set_flashdata(
        'pesan',
        '<div class="alert alert-success alert-dismissible fade show" role="alert">
          Data user berhasil ditambahkan
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>'
      );
      redirect('kader2/data_lansia');
    }
  }
  public function update($id_lansia){
    $where = array('id_lansia'=>$id_lansia);

    $data['data_lansia'] = $this->lansia_model->edit_data($where, 'data_lansia')->result();
    $this->load->view('Template/Kader2/header_kader',$data);
    $this->load->view('Kader2/lansia_update',$data);
    $this->load->view('Template/Kader2/footer_kader',$data);
  }

  public function update_aksi(){
    $id_lansia  = $this->input->post('id_lansia');
    $id_posyandu   = $this->input->post('id_posyandu');
    $nama_lansia	   = $this->input->post('nama_lansia');
    $tanggal_lahir   = $this->input->post('tanggal_lahir');
    $umur  = $this->input->post('umur');
    $jenis_kelamin	  = $this->input->post('jenis_kelamin');
    $alamat  = $this->input->post('alamat');
  
    $data = array(
      'id_lansia'   => $id_lansia,
      'id_posyandu'   =>  $id_posyandu,
      'nama_lansia'   => $nama_lansia,
      'tanggal_lahir'   =>  $tanggal_lahir,
      'umur'   =>  $umur,
      'jenis_kelamin'   => $jenis_kelamin,
      'alamat'   => $alamat,
    );

    $where = array('id_lansia'=>$id_lansia);

    $this->lansia_model->update_data($where, $data, 'data_lansia');
    $this->session->set_flashdata(
      'pesan',
      '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data user berhasil diupdate
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
    );
    redirect('kader2/data_lansia');
  }

  public function hapus($id_lansia){
    $where = array('id_lansia' => $id_lansia);
    $this->lansia_model->hapus_data($where, 'data_lansia');
    $this->session->set_flashdata(
      'pesan',
      '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data user berhasil dihapus
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
    );
    redirect('kader2/data_lansia');
  }
  
  public function _rules(){
    $this->form_validation->set_rules('id_lansia', 'id_lansia', 'required', [
      'required' => 'id_lansia wajib diisi!'
    ]);
    $this->form_validation->set_rules('id_posyandu', 'id_posyandu', 'required', [
      'required' => ' id_posyandu wajib diisi!'
    ]);
    $this->form_validation->set_rules('nama_lansia', 'nama_lansia', 'required', [
      'required' => 'nama_lansia wajib diisi!'
    ]);
    $this->form_validation->set_rules('tanggal_lahir', 'tanggal_lahir', 'required', [
      'required' => ' wajib diisi!'
    ]);
    $this->form_validation->set_rules('umur', 'umur', 'required', [
      'required' => 'umur wajib diisi!'
    ]);
    $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required', [
      'required' => 'jenis_kelamin wajib diisi!'
    ]);
    $this->form_validation->set_rules('alamat', 'alamat', 'required', [
      'required' => 'alamat wajib diisi!'
    ]);
  }

}