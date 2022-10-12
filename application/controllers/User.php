<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    check_not_login();
    $this->load->model('mUser');
    $this->load->library('form_validation');
  }
  public function index()
  {
    $data['row'] = $this->mUser->getdata();

    $this->template->load('template', 'user/dataUser', $data);
  }

  public function add()
  {

    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('username', 'Username', 'required|min_length[3]|is_unique[user.username]');
    $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
    $this->form_validation->set_rules(
      'konfirm_password',
      'Konfirmasi Password',
      'required|matches[password]'
    );
    $this->form_validation->set_rules('contact', 'Contact', 'required|numeric');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('alamat', 'Alamat', 'required');
    $this->form_validation->set_rules('level', 'Level', 'required');

    $this->form_validation->set_message('required', '%s tidak boleh kosong');
    $this->form_validation->set_message('matches', '%s harus sama dengan password');
    $this->form_validation->set_message('valid_email', '%s tidak valid');
    $this->form_validation->set_message('min_length', '{field} karakter kurang');
    $this->form_validation->set_message('is_unique', '{field} ini sudah dipakai');
    $this->form_validation->set_message('numeric', '{field} harus angka');

    $this->form_validation->set_error_delimiters('<span class ="help-block">', '</span>');
    if ($this->form_validation->run() == false) {
      $this->template->load('template', 'user/user_tambah');
    } else {
      $post = $this->input->post(null, true);
      $this->mUser->add($post);

      if ($this->db->affected_rows() > 0) {
        echo "<script>alert('data berhasil ditambahkan')</script>";
      }
      echo "<script>window.location='" . site_url('user') . "'</script>";
    }
  }

  public function edit($id)
  {

    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('username', 'Username', 'required|min_length[3]|callback_username_check');

    if ($this->input->post('password')) {
      $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
      $this->form_validation->set_rules(
        'konfirm_password',
        'Konfirmasi Password',
        'required|matches[password]'
      );
    }
    if ($this->input->post('konfirm_password')) {
      $this->form_validation->set_rules(
        'konfirm_password',
        'Konfirmasi Password',
        'required|matches[password]'
      );
    }
    $this->form_validation->set_rules('contact', 'Contact', 'required|numeric');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('alamat', 'Alamat', 'required');
    $this->form_validation->set_rules('level', 'Level', 'required');

    $this->form_validation->set_message('required', '%s tidak boleh kosong');
    $this->form_validation->set_message('matches', '%s harus sama dengan password');
    $this->form_validation->set_message('valid_email', '%s tidak valid');
    $this->form_validation->set_message('min_length', '{field} karakter kurang');
    $this->form_validation->set_message('is_unique', '{field} ini sudah dipakai');
    $this->form_validation->set_message('numeric', '{field} harus angka');

    $this->form_validation->set_error_delimiters('<span class ="help-block">', '</span>');
    if ($this->form_validation->run() == false) {
      $query = $this->mUser->getdata($id);
      if ($query->num_rows() > 0) {
        $data['row'] = $query->row();
        $this->template->load('template', 'user/user_edit', $data);
      } else {
        echo "<script>alert('data tidak ditemukan')</script>";
        echo "<script>window.location='" . site_url('user') . "'</script>";
      }
    } else {
      $post = $this->input->post(null, true);
      $this->mUser->edit($post);

      if ($this->db->affected_rows() > 0) {
        echo "<script>alert('data berhasil diubah')</script>";
      }
      echo "<script>window.location='" . site_url('user') . "'</script>";
    }
  }

  public function username_check()
  {
    $post = $this->input->post(null, true);
    $query = $this->db->query("SELECT * FROM user WHERE username= '$post[username]' AND user_id!='$post[user_id]'");
    if ($query->num_rows() > 0) {
      $this->form_validation->set_message('username_check', '{field} sudah dipakai, silahkan ganti');
      return false;
    } else {
      return true;
    }
  }

  public function hapus()
  {
    $id = $this->input->post('user_id');
    $this->mUser->hapus($id);
    if ($this->db->affected_rows() > 0) {
      echo "<script>alert('data berhasil dihapus')</script>";
    }
    echo "<script>window.location='" . site_url('user') . "'</script>";
  }
}
