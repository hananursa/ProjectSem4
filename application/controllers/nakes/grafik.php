<?php

class grafik extends CI_Controller{

  public function index(){
    $this->load->view('template/nakes/header');
    $this->load->view('template/nakes/sidebar');
    $this->load->view('nakes/grafik_IMT');
    $this->load->view('template/nakes/footer');
  }

}