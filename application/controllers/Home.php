<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('mLowongan');
  }
  public function index()
  {
    // check_not_login();
    check_already_login();
    $data['row'] = $this->mLowongan->getdata();
    $this->load->view('home/home', $data);
  }
}
