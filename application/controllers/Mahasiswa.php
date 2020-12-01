<?php

class Mahasiswa extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Mahasiswa_model');
    $this->load->library('form_validation');
  }

  public function index()
  {
    $data['title'] = 'Mahasiswa';
    $data['mahasiswas'] = $this->Mahasiswa_model->getAll();
    if ($this->input->post('keyword')) {
      $data['mahasiswas'] = $this->Mahasiswa_model->search();
    }

    $this->load->view('templates/header', $data);
    $this->load->view('pages/mahasiswa/index', $data);
    $this->load->view('templates/footer');
  }
  public function detail($key)
  {
    $data['title'] = 'Detail Mahasiswa';
    $data['mahasiswa'] = $this->Mahasiswa_model->getByKey($key);

    $this->load->view('templates/header', $data);
    $this->load->view('pages/mahasiswa/detail', $data);
    $this->load->view('templates/footer');
  }
  public function add()
  {
    $data['title'] = 'Form Input Mahasiswa';

    $this->form_validation->set_rules('nim', 'NIM', 'required|numeric|is_unique[mahasiswas.nim]');
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('gender', 'Gender', 'required');
    $this->form_validation->set_rules('phone', 'Phone', 'required|numeric|is_unique[mahasiswas.phone]');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[mahasiswas.email]');
    $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
    $this->form_validation->set_rules('alamat', 'Alamat', 'required');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('pages/mahasiswa/add');
      $this->load->view('templates/footer');
    } else {
      $this->Mahasiswa_model->addOne();
      $this->session->set_flashdata('flash_message', 'Ditambahkan');
      redirect('mahasiswa');
    }
  }
  public function update($key)
  {
    $data['title'] = 'Form Update Mahasiswa';
    $data['mahasiswa'] = $this->Mahasiswa_model->getByKey($key);
    $data['jurusan'] = ['Teknik Informatika', 'Sistem Informatika'];
    $data['gender'] = ['Pria', 'Wanita'];

    $this->form_validation->set_rules('nim', 'NIM', 'required|numeric');
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('gender', 'Gender', 'required');
    $this->form_validation->set_rules('phone', 'Phone', 'required|numeric');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
    $this->form_validation->set_rules('alamat', 'Alamat', 'required');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('pages/mahasiswa/update', $data);
      $this->load->view('templates/footer');
    } else {
      $this->Mahasiswa_model->updateByKey($key);
      $this->session->set_flashdata('flash_message', 'Diubah');
      redirect('mahasiswa');
    }
  }
  public function delete($key)
  {
    $this->Mahasiswa_model->deleteByKey($key);
    $this->session->set_flashdata('flash_message', 'Dihapus');
    redirect('mahasiswa');
  }
}
