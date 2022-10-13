<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mLowongan extends CI_Model
{
  public function getdata($id = null)
  {
    $this->db->select('*');
    $this->db->from('lowongan');
    if ($id != null) {
      $this->db->where('lowongan_id', $id);
    }
    $query = $this->db->get();
    return $query;
  }

  public function add($post)
  {
    $params = [
      'nama_lowongan' => $post['nama_lowongan'],
      'kouta' => $post['kuota'],
      'description' => $post['deskripsi']
    ];
    $this->db->insert('lowongan', $params);
  }

  public function edit($post)
  {
    $params = [
      'nama_lowongan' => $post['nama_lowongan'],
      'kouta' => $post['kuota'],
      'description' => $post['deskripsi']
    ];

    $this->db->where('lowongan_id', $post['id']);
    $this->db->update('lowongan', $params);
  }

  public function hapus($id)
  {
    $this->db->where('lowongan_id', $id);
    $this->db->delete('lowongan');
  }
}
