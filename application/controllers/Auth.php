<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
  public function login()
  {
    check_already_login();
    $this->load->view('login');
  }

  public function register()
  {
    $this->load->view('register');
    $this->load->model('mUser');
    if (isset($_POST['register'])) {
      $post = $this->input->post(null, true);
      $this->mUser->register($post);
      if ($this->db->affected_rows() > 0) {
        echo "<script>alert('data berhasil ditambahkan. silahkan login untuk memulai pendaftaran')</script>";
      }
      echo "<script>window.location='" . site_url('home') . "'</script>";
      echo "salah";
    }
  }

  //fungsi proses login
  public function process()
  {
    $post = $this->input->post(null, TRUE);
    if (isset($post['login'])) {
      $this->load->model('mUser');
      $query = $this->mUser->login($post);
      if ($query->num_rows() > 0) {
        $row = $query->row();
        $params = array(
          'userid' => $row->user_id,
          'level' => $row->level
        );

        $this->session->set_userdata($params);

        echo "<script> 
        alert('Selamat, login berhasil');
        </script>";
        if ($row->level == 1) {
          echo "<script> 
        window.location='" . site_url('dashboard/dash_admin') . "';
        </script>";
        } else if ($row->level == 2) {
          echo "<script> 
        window.location='" . site_url('dashboard/dash_leader') . "';
        </script>";
        } else if ($row->level == 3) {
          echo "<script> 
          window.location='" . site_url('dashboard/dash_pelamar') . "';
          </script>";
        }
      } else {
        echo "<script> alert('login gagal, username/password salah');
        window.location='" . site_url('auth/login') . "';
        </script>";
      }
    }
  }

  public function logout()
  {
    $params = array('userid', 'level');
    $this->session->unset_userdata($params);
    redirect('home');
  }
}
