<?php

class gizi extends CI_Controller
{

  public function index()
  {
    $data['gizi'] = $this->kesehatan_model->tampil_data('gizi')->result();
    $this->load->view('template/nakes/header');
    $this->load->view('template/nakes/sidebar');
    $this->load->view('nakes/gizi', $data);
    $this->load->view('template/nakes/footer');
  }

  public function tambah_gizi()
  {

    $data = array(
      'id_gizi' => set_value('id_gizi'),
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

  public function tambah_gizi_aksi()
  {
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');

    $this->_rules();

    if ($this->form_validation->run() == TRUE) {

      $config['upload_path'] = './assets/gizi';
      $config['allowed_types'] = 'jpg|png|gif';
      $config['max_size']         = 2000;
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('gambar')) {
        $this->tambah_gizi();
      } else {
        $data = array(
          'id_gizi'   => $this->input->post('id_gizi', TRUE),
          'jenis'   => $this->input->post('jenis', TRUE),
          'tanggal'      => $this->input->post('tanggal', TRUE),
          'keterangan'      => $this->input->post('keterangan', TRUE),
          'gambar'     => $this->upload->data('file_name'),
          'status'     => $this->input->post('status', TRUE),
        );
        $this->gizi_model->insert_data($data, 'gizi');
        $this->session->set_flashdata(
          'pesan',
          '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data gizi berhasil ditambahkan
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>'
        );
        redirect('nakes/gizi');
      }
    } else {
      $this->tambah_gizi();
    }
  }

  public function update($id_gizi)
  {
    $where = array('id_gizi' => $id_gizi);

    $data['gizi'] = $this->kesehatan_model->edit_data($where, 'gizi')->result();
    $this->load->view('template/nakes/header');
    $this->load->view('template/nakes/sidebar');
    $this->load->view('nakes/gizi_update', $data);
    $this->load->view('template/nakes/footer');
  }

  public function update_aksi($id_gizi)
  {
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');

    $this->_rules();

    if ($this->form_validation->run() == TRUE) {

      $path = './assets/gizi/' . $this->gizi_model->ambil_data($id_gizi)->gambar;
      unlink($path);

      $config['upload_path'] = './assets/gizi';
      $config['allowed_types'] = 'jpg|png|gif';
      $config['max_size']         = 2000;
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('gambar')) {
        $this->update($id_gizi);
      } else {
        $data = array(
          'jenis'   => $this->input->post('jenis', TRUE),
          'tanggal'      => $this->input->post('tanggal', TRUE),
          'keterangan'      => $this->input->post('keterangan', TRUE),
          'gambar'     => $this->upload->data('file_name'),
          'status'     => $this->input->post('status', TRUE),
        );

        $where = array('id_gizi' => $id_gizi);

        $this->kesehatan_model->update_data($where, $data, 'gizi');
        $this->session->set_flashdata(
          'pesan',
          '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data gizi berhasil diupdate
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>'
        );
        redirect('nakes/gizi');
      }
    } else {
      $this->update($id_gizi);
    }
  }

  public function hapus($id_gizi)
  {
    $path = './assets/gizi/' . $this->gizi_model->ambil_data($id_gizi)->gambar;
    unlink($path);

    $where = array('id_gizi' => $id_gizi);
    $this->gizi_model->hapus_data($where, 'gizi');
    $this->session->set_flashdata(
      'pesan',
      '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data gizi berhasil dihapus
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
    );
    redirect('nakes/gizi');
  }
<<<<<<< HEAD
  public function grafik_IMT(){
    $this->load->view('template/nakes/header');
    $this->load->view('template/nakes/sidebar');
    $this->load->view('nakes/grafik_IMT');
    $this->load->view('template/nakes/footer');
  }
  public function grafik_tensi(){
    $this->load->view('template/nakes/header');
    $this->load->view('template/nakes/sidebar');
    $this->load->view('nakes/grafik_tensi',$data);
    $this->load->view('template/nakes/footer');
  }
  public function _rules(){
=======

  public function _rules()
  {
>>>>>>> 10efbfcd641384a00158a0075f9e9ea3eed251e8
    $this->form_validation->set_rules('id_gizi', 'id_gizi', 'required', [
      'required' => 'id_gizi wajib diisi!'
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
    $this->form_validation->set_rules('status', 'status', 'required', [
      'required' => 'status wajib diisi!'
    ]);
  }
}
