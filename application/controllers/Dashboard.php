<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function dash_admin()
	{
		check_not_login();
		$this->template->load('template', 'dashboard');
	}
	public function dash_pelamar()
	{
		check_not_login();
		$this->template->load('templatePelamar', 'daftar');
	}
	public function dash_leader()
	{
		check_not_login();
		$this->template->load('templateLeader', 'dashboard');
	}
}
