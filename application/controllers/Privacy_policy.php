<?php

class Privacy_policy extends CI_Controller
{
  public function index()
  {
    $data['title'] = 'Privacy Policy';
    $this->load->view('templates/header', $data);
    $this->load->view('pages/privacy_policy');
    $this->load->view('templates/footer');
  }
}
