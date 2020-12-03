<?php

class Mata_kuliah extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Mata_kuliah_model');
    $this->load->library('form_validation');
  }

  public function index()
  {
    $data['title'] = 'Mata Kuliah';
    $data['mata_kuliahs'] = $this->Mata_kuliah_model->getAll();
    if ($this->input->post('keyword')) {
      $data['mata_kuliahs'] = $this->Mata_kuliah_model->search();
    }

    $this->load->view('templates/header', $data);
    $this->load->view('pages/mata_kuliah/index', $data);
    $this->load->view('templates/footer');
  }
  public function detail($key)
  {
    $data['title'] = 'Detail Mata Kuliah';
    $data['mata_kuliah'] = $this->Mata_kuliah_model->getByKey($key);

    $this->load->view('templates/header', $data);
    $this->load->view('pages/mata_kuliah/detail', $data);
    $this->load->view('templates/footer');
  }
  public function add()
  {
    $data['title'] = 'Form Input Mata Kuliah';

    $this->form_validation->set_rules('kode', 'Kode', 'required|is_unique[mata_kuliahs.kode]');
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('sks', 'SKS', 'required|numeric');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('pages/mata_kuliah/add');
      $this->load->view('templates/footer');
    } else {
      $this->Mata_kuliah_model->addOne();
      $this->session->set_flashdata('flash_message', 'Ditambahkan');
      redirect('Mata_kuliah');
    }
  }
  public function update($key)
  {
    $data['title'] = 'Form Input Mata Kuliah';
    $data['mata_kuliah'] = $this->Mata_kuliah_model->getByKey($key);

    $this->form_validation->set_rules('kode', 'Kode', 'required');
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('sks', 'SKS', 'required|numeric');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('pages/mata_kuliah/update', $data);
      $this->load->view('templates/footer');
    } else {
      $this->Mata_kuliah_model->updateByKey($key);
      $this->session->set_flashdata('flash_message', 'Diubah');
      redirect('Mata_kuliah');
    }
  }
  public function delete($key)
  {
    $this->Mata_kuliah_model->deleteByKey($key);
    $this->session->set_flashdata('flash_message', 'Dihapus');
    redirect('Mata_kuliah');
  }
}
