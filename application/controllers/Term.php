<?php

class Term extends CI_Controller
{
  public function index()
  {
    $data['title'] = 'Term&Condition';
    $this->load->view('templates/header', $data);
    $this->load->view('pages/term');
    $this->load->view('templates/footer');
  }
}
