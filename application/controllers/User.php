<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
  public function index()
  {
    check_not_login();
    $this->load->model('mUser');
    $data['row'] = $this->mUser->getdata();

    $this->template->load('template', 'user/dataUser', $data);
  }

  public function add()
  {
    $this->template->load('template', 'user/user_tambah');
    echo "tambah";
  }
}
