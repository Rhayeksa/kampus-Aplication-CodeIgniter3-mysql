<?php

class Dosen extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Dosen_model');
    $this->load->library('form_validation');
  }

  public function index()
  {
    $data['title'] = 'Dosen';
    $data['dosens'] = $this->Dosen_model->getAll();
    if ($this->input->post('keyword')) {
      $data['dosens'] = $this->Dosen_model->search();
    }

    $this->load->view('templates/header', $data);
    $this->load->view('pages/dosen/index', $data);
    $this->load->view('templates/footer');
  }
  public function detail($key)
  {
    $data['title'] = 'Detail Dosen';
    $data['dosen'] = $this->Dosen_model->getByKey($key);

    $this->load->view('templates/header', $data);
    $this->load->view('pages/dosen/detail', $data);
    $this->load->view('templates/footer');
  }
  public function add()
  {
    $data['title'] = 'Form Input Dosen';

    $this->form_validation->set_rules('nid', 'NID', 'required|numeric|is_unique[dosens.nid]');
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('gender', 'Gender', 'required');
    $this->form_validation->set_rules('phone', 'Phone', 'required|numeric|is_unique[dosens.phone]');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[dosens.email]');
    $this->form_validation->set_rules('alamat', 'Alamat', 'required');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('pages/dosen/add');
      $this->load->view('templates/footer');
    } else {
      $this->Dosen_model->addOne();
      $this->session->set_flashdata('flash_message', 'Ditambahkan');
      redirect('Dosen');
    }
  }
  public function update($key)
  {
    $data['title'] = 'Form Update Dosen';
    $data['dosen'] = $this->Dosen_model->getByKey($key);
    $data['genders'] = ['Pria', 'Wanita'];

    $this->form_validation->set_rules('nid', 'NID', 'required|numeric');
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('gender', 'Gender', 'required');
    $this->form_validation->set_rules('phone', 'Phone', 'required|numeric');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('alamat', 'Alamat', 'required');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('pages/dosen/update', $data);
      $this->load->view('templates/footer');
    } else {
      $this->Dosen_model->updateByKey($key);
      $this->session->set_flashdata('flash_message', 'Diubah');
      redirect('Dosen');
    }
  }
  public function delete($key)
  {
    $this->Dosen_model->deleteByKey($key);
    $this->session->set_flashdata('flash_message', 'Dihapus');
    redirect('Dosen');
  }
}
