<?php

class Disclaimer extends CI_Controller
{
  public function index()
  {
    $data['title'] = 'Disclaimer';
    $this->load->view('templates/header', $data);
    $this->load->view('pages/disclaimer');
    $this->load->view('templates/footer');
  }
}
