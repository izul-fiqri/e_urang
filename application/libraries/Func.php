<?php

class Func
{
  protected $ci;

  function  __construct()
  {
    $this->ci = &get_instance();
  }

  function user_login()
  {
    $this->ci->load->model('mUser');
    $user_id = $this->ci->session->userdata('userid');
    $user_data = $this->ci->mUser->getdata($user_id)->row();
    return $user_data;
  }

  function user_login_pelamar()
  {
    $this->ci->load->model('mPelamar');
    $user_id = $this->ci->session->userdata('userid');
    $user_data = $this->ci->mUser->getdata($user_id)->row();
    return $user_data;
  }
}
