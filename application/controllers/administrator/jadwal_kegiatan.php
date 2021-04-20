<?php

class jadwal_kegiatan extends CI_Controller
{

  public function index()
  {
    $data['jadwal_kegiatan'] = $this->jadwal_model->tampil_data('jadwal_kegiatan')->result();
    $this->load->view('template/admin/header');
    $this->load->view('template/admin/sidebar');
    $this->load->view('administrator/jadwal_kegiatan', $data);
    $this->load->view('template/admin/footer');
  }

  public function tambah_jadwal_kegiatan()
  {
    $data = array(
      'id_jadwal' => set_value('id_jadwal'),
      'id_lansia' => set_value('id_lansia'),
      'kegiatan'    => set_value('kegiatan'),
      'waktu'    => set_value('waktu'),
      'keterangan'   => set_value('keterangan'),
      'gambar'   => set_value('gambar'),
    );

    $this->load->view('template/admin/header');
    $this->load->view('template/admin/sidebar');
    $this->load->view('administrator/jadwal_form', $data);
    $this->load->view('template/admin/footer');
  }

  public function tambah_jadwal_kegiatan_aksi()
  {
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');

    $this->_rules();

    if ($this->form_validation->run() == TRUE) {
      $config['upload_path'] = './assets/gambarjadwal';
      $config['allowed_types'] = 'jpg|png|gif';
      $config['max_size']         = 2000;
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('gambar')) {
        $this->tambah_jadwal_kegiatan();
      } else {
        $data = array(
          'id_jadwal'   => $this->input->post('id_jadwal', TRUE),
          'kegiatan'      => $this->input->post('kegiatan', TRUE),
          'waktu'      => $this->input->post('waktu', TRUE),
          'keterangan'     => $this->input->post('keterangan', TRUE),
          'gambar'     => $this->upload->data('file_name'),
        );
        $this->jadwal_model->insert_data($data, 'jadwal_kegiatan');
        $this->session->set_flashdata(
          'pesan',
          '<div class="alert alert-success alert-dismissible fade show" role="alert">
                      Data kegiatan berhasil ditambahkan
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>'
        );
        redirect('administrator/jadwal_kegiatan');
      }
    } else {
      $this->tambah_jadwal_kegiatan();
    }
  }

  public function update($id_jadwal)
  {
    $where = array('id_jadwal' => $id_jadwal);

    $data['jadwal_kegiatan'] = $this->user_model->edit_data($where, 'jadwal_kegiatan')->result();
    $this->load->view('template/admin/header');
    $this->load->view('template/admin/sidebar');
    $this->load->view('administrator/jadwal_update', $data);
    $this->load->view('template/admin/footer');
  }

  public function update_aksi($id_jadwal)
  {
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');

    $this->_rules();

    if ($this->form_validation->run() == TRUE) {

      $path = './assets/gambarjadwal/' . $this->jadwal_model->ambil_data($id_jadwal)->gambar;
      unlink($path);

      $config['upload_path'] = './assets/gambarjadwal';
      $config['allowed_types'] = 'jpg|png|gif';
      $config['max_size']         = 2000;
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('gambar')) {
        $this->update($id_jadwal);
      } else {
        $data = array(
          'id_jadwal'   => $id_jadwal,
          'kegiatan'      => $this->input->post('kegiatan', TRUE),
          'waktu'      => $this->input->post('waktu', TRUE),
          'keterangan'     => $this->input->post('keterangan', TRUE),
          'gambar'     => $this->upload->data('file_name'),
        );

        $where = array('id_jadwal' => $id_jadwal);

        $this->jadwal_model->update_data($where, $data, 'jadwal_kegiatan');
        $this->session->set_flashdata(
          'pesan',
          '<div class="alert alert-success alert-dismissible fade show" role="alert">
          Data kegiatan berhasil diupdate
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
          </div>'
        );
        redirect('administrator/jadwal_kegiatan');
      }
    } else {
      $this->update($id_jadwal);
    }
  }

  public function hapus($id_jadwal)
  {
    $path = './assets/gambarjadwal/' . $this->jadwal_model->ambil_data($id_jadwal)->gambar;
    unlink($path);
    $where = array('id_jadwal' => $id_jadwal);

    $this->jadwal_model->hapus_data($where, 'jadwal_kegiatan');
    $this->session->set_flashdata(
      'pesan',
      '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data kegiatan berhasil dihapus
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>'
    );
    redirect('administrator/jadwal_kegiatan');
  }

  public function _rules()
  {
    $this->form_validation->set_rules('kegiatan', 'kegiatan', 'required', [
      'required' => 'kegiatan wajib diisi!'
    ]);
    $this->form_validation->set_rules('waktu', 'waktu', 'required', [
      'required' => 'waktu wajib diisi!'
    ]);
    $this->form_validation->set_rules('keterangan', 'keterangan', 'required', [
      'required' => 'keterangan wajib diisi!'
    ]);
  }
}
