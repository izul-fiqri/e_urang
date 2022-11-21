<?php

function check_already_login()
{
  $ci = &get_instance();
  $user_session = $ci->session->userdata('userid');
  if ($user_session) {
    redirect('dashboard');
  }
}

function check_not_login()
{
  $ci = &get_instance();
  $user_session = $ci->session->userdata('userid');
  if (!$user_session) {
    redirect('auth/login');
  }

  function check_admin()
  {
    $ci = &get_instance();
    $ci->load->library('func');
    if ($ci->func->user_login()->level != 1) {
      redirect('dashboard');
    }
  }
  function check_pelamar()
  {
    $ci = &get_instance();
    $ci->load->library('func');
    if ($ci->func->user_login()->level != 3) {
      redirect('dashboard');
    }
  }
  function check_leader()
  {
    $ci = &get_instance();
    $ci->load->library('func');
    if ($ci->func->user_login()->level != 2) {
      redirect('dashboard');
    }
  }
  function check_leader_and_admin()
  {
    $ci = &get_instance();
    $ci->load->library('func');
    if ($ci->func->user_login()->level == 3) {
      redirect('dashboard');
    }
  }
}
