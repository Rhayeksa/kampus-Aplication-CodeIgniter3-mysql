<?php

class Mata_kuliah_model extends CI_Model
{
  public function getAll()
  {
    return $this->db->get('mata_kuliahs')->result_array();
  }
  public function search()
  {
    $keyword = $this->input->post('keyword', true);
    $this->db->like('nama', $keyword);

    return $this->db->get('mata_kuliahs')->result_array();
  }
  public function getByKey($key)
  {
    return $this->db->get_where('mata_kuliahs', ['kode' => $key])->row_array();
  }
  public function addOne()
  {
    $data = [
      'kode' => $this->input->post('kode', true),
      'nama' => $this->input->post('nama', true),
      'sks' => $this->input->post('sks', true),
      'createdAt' => $this->input->post('createdAt', true),
      'updatedAt' => $this->input->post('updatedAt', true),
    ];
    return $this->db->insert('mata_kuliahs', $data);
  }
  public function updateByKey($key)
  {
    $data = [
      'kode' => $this->input->post('kode', true),
      'nama' => $this->input->post('nama', true),
      'sks' => $this->input->post('sks', true),
      'updatedAt' => $this->input->post('updatedAt', true),
    ];
    $this->db->where('kode', $key);
    $this->db->update('mata_kuliahs', $data);
  }
  public function deleteByKey($key)
  {
    return $this->db->delete('mata_kuliahs', ['kode' => $key]);
  }
}
