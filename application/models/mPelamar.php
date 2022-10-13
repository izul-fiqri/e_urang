<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mPelamar extends CI_Model
{
  public function getdata($id = null)
  {
    $this->db->select('*');
    $this->db->from('pelamar');
    if ($id != null) {
      $this->db->where('pelamar_id', $id);
    }
    $query = $this->db->get();
    return $query;
  }

  public function add($post)
  {
    $params = [
      'nama' => $post['nama'],
      'jenis_kelamin' => $post['kuota'],
      'description' => $post['deskripsi']
    ];
    $this->db->insert('pelamar', $params);
  }

  public function edit($post)
  {
    $params = [
      'nama_pelamar' => $post['nama_pelamar'],
      'kouta' => $post['kuota'],
      'description' => $post['deskripsi']
    ];

    $this->db->where('pelamar_id', $post['id']);
    $this->db->update('pelamar', $params);
  }

  public function hapus($id)
  {
    $this->db->where('pelamar_id', $id);
    $this->db->delete('pelamar');
  }
}
