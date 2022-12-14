<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mUser extends CI_Model
{
  public function login($post)
  {
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('username', $post['username']);
    $this->db->where('password', sha1($post['password']));
    $query = $this->db->get();
    return $query;
  }

  public function getdata($id = null)
  {
    $this->db->select('*');
    $this->db->from('user');
    if ($id != null) {
      $this->db->where('user_id', $id);
    }
    $query = $this->db->get();
    return $query;
  }

  public function register($post)
  {
    $params['name'] = $post['name'];
    $params['username'] = $post['username'];
    $params['password'] = sha1($post['password']);
    $params['level'] = 3;
    $this->db->insert('user', $params);
  }

  public function edit($post)
  {
    $params['name'] = $post['name'];
    $params['username'] = $post['username'];
    if (!empty($post['password'])) {
      $params['password'] = sha1($post['password']);
    }
    $params['level'] = $post['level'];
    $this->db->where('user_id', $post['user_id']);
    $this->db->update('user', $params);
  }
  public function hapus($id)
  {
    $this->db->where('user_id', $id);
    $this->db->delete('user');
  }
}
