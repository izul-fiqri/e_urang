<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    check_not_login();
    $this->load->model(['mPelamar', 'mLowongan']);
  }
  public function index()
  {
    check_pelamar();
    $data['row'] = $this->mLowongan->getdata();
    $this->template->load('template', 'daftar',  $data);
  }

  public function add()
  {

    $daftar = new stdClass();
    $daftar->lowongan_id = null;
    $daftar->nama = null;
    $daftar->nik = null;
    $daftar->jenis_kelamin = null;
    $daftar->tempat_lahir = null;
    $daftar->tgl_lahir = null;
    $daftar->alamat = null;
    $daftar->email = null;
    $daftar->no_tlp = null;
    $daftar->pendidikan_terakhir = null;
    $daftar->nama_sekolah = null;
    $daftar->jurusan = null;
    $daftar->foto_profil = null;
    $daftar->file_ktp = null;
    $daftar->file_ijazah = null;
    $daftar->file_transkrip = null;
    $daftar->file_skck = null;
    $daftar->file_cv = null;
    $daftar->lowongan_id = null;

    $query_lowongan = $this->mLowongan->getdata();


    $data = array(
      'page' => 'Tambah',
      'row' => $daftar,
      'lowongan' =>  $query_lowongan
    );

    $this->template->load('template', 'daftar', $data);
  }

  public function proses()
  {
    $post = $this->input->post(null, true);
    if (isset($_POST['Tambah'])) {
      $this->mPelamar->add($post);
    }

    if ($this->db->affected_rows() > 0) {
      $this->session->set_flashdata('success', 'Data berhasil disimpan');
    }
    redirect('dashboard');
  }
}
