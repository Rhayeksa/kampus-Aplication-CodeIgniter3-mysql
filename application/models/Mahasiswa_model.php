<?php

class Mahasiswa_model extends CI_Model
{
  public function getAll()
  {
    return $this->db->get('mahasiswas')->result_array();
  }
  public function search()
  {
    $keyword = $this->input->post('keyword', true);
    $this->db->like('nim', $keyword);
    $this->db->or_like('nama', $keyword);
    $this->db->or_like('jurusan', $keyword);
    $this->db->or_like('email', $keyword);

    return $this->db->get('mahasiswas')->result_array();
  }
  public function getByKey($key)
  {
    return $this->db->get_where('mahasiswas', ['nim' => $key])->row_array();
  }
  public function addOne()
  {
    $data = [
      'nim' => $this->input->post('nim', true),
      'nama' => $this->input->post('nama', true),
      'gender' => $this->input->post('gender', true),
      'phone' => $this->input->post('phone', true),
      'email' => $this->input->post('email', true),
      'jurusan' => $this->input->post('jurusan', true),
      'alamat' => $this->input->post('alamat', true),
      'createdAt' => $this->input->post('createdAt', true),
      'updatedAt' => $this->input->post('updatedAt', true),
    ];
    return $this->db->insert('mahasiswas', $data);
  }
  public function updateByKey($key)
  {
    $data = [
      'nim' => $this->input->post('nim', true),
      'nama' => $this->input->post('nama', true),
      'gender' => $this->input->post('gender', true),
      'phone' => $this->input->post('phone', true),
      'email' => $this->input->post('email', true),
      'jurusan' => $this->input->post('jurusan', true),
      'alamat' => $this->input->post('alamat', true),
      'createdAt' => $this->input->post('createdAt', true),
      'updatedAt' => $this->input->post('updatedAt', true),
    ];
    $this->db->where('nim', $key);
    $this->db->update('mahasiswas', $data);
  }
  public function deleteByKey($key)
  {
    return $this->db->delete('mahasiswas', ['nim' => $key]);
  }
}
