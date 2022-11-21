<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar extends CI_Controller
{
  public function index()
  {
    check_not_login();
    check_pelamar();
    $this->template->load('template', 'daftar');
  }
}
