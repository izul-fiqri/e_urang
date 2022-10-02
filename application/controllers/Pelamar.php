<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelamar extends CI_Controller
{
  public function index()
  {
    $this->template->load('template', 'pelamar/dataPelamar');
  }
}
