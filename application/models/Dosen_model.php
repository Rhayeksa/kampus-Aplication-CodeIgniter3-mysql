<?php

class Dosen_model extends CI_Model
{
  public function getAll()
  {
    return $this->db->get('dosens')->result_array();
  }
  public function search()
  {
    $keyword = $this->input->post('keyword', true);
    $this->db->like('nid', $keyword);
    $this->db->or_like('nama', $keyword);
    $this->db->or_like('email', $keyword);

    return $this->db->get('dosens')->result_array();
  }
  public function getByKey($key)
  {
    return $this->db->get_where('dosens', ['nid' => $key])->row_array();
  }
  public function addOne()
  {
    $data = [
      'nid' => $this->input->post('nid', true),
      'nama' => $this->input->post('nama', true),
      'gender' => $this->input->post('gender', true),
      'phone' => $this->input->post('phone', true),
      'email' => $this->input->post('email', true),
      'alamat' => $this->input->post('alamat', true),
      'createdAt' => $this->input->post('createdAt', true),
      'updatedAt' => $this->input->post('updatedAt', true),
    ];
    return $this->db->insert('dosens', $data);
  }
  public function updateByKey($key)
  {
    $data = [
      'nid' => $this->input->post('nid', true),
      'nama' => $this->input->post('nama', true),
      'gender' => $this->input->post('gender', true),
      'phone' => $this->input->post('phone', true),
      'email' => $this->input->post('email', true),
      'alamat' => $this->input->post('alamat', true),
      'updatedAt' => $this->input->post('updatedAt', true),
    ];
    $this->db->where('nid', $key);
    $this->db->update('dosens', $data);
  }
  public function deleteByKey($key)
  {
    return $this->db->delete('dosens', ['nid' => $key]);
  }
}
