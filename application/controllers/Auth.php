<?php

class Auth extends CI_Controller
{

  public function index()
  {
    $this->load->view('template/admin/header');
    $this->load->view('administrator/login');
    $this->load->view('template/admin/footer');
  }

  public function proses_login()
  {
    
    $this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'Username wajib diisi']);
    $this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'Password wajib diisi']);
    
    if ($this->form_validation->run() == FALSE) {
      $this->load->view('template/admin/header');
      $this->load->view('administrator/login');
      $this->load->view('template/admin/footer');
    } else {
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $level = $this->input->post('level');

      $user = $username;
      $pass = $password;
      $lvl = $level;
      $cek = $this->login_model->cek_login($user, $pass, $lvl );

      if ($cek->num_rows() > 0) {
        foreach ($cek->result() as $ck) {
          $sess_data['username'] = $ck->username;
          $sess_data['email'] = $ck->email;
          $sess_data['level'] = $ck->level;

          $this->session->set_userdata($sess_data);
        }
        if ($sess_data['level'] == 'admin') {
          redirect('administrator/dashboard');
        } else if ($sess_data['level'] == 'nakes') {
          redirect('nakes/dashboard');
        } else {
          $this->session->set_flashdata(
            'pesan',
            '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  Username atau password salah
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  </div>'
          );
          redirect('auth');
        }
      }
    }
  }
  
  public function logout(){
      $this->session->sess_destroy();
    redirect('Auth/proses_login', 'refresh');
  }
}
