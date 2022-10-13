<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lowongan extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('mLowongan');
  }
  public function index()
  {
    $data['row'] = $this->mLowongan->getdata();
    $this->template->load('template', 'lowongan/dataLowongan', $data);
  }

  public function add()
  {
    $lowongan = new stdClass();
    $lowongan->lowongan_id = null;
    $lowongan->nama_lowongan = null;
    $lowongan->kouta = null;
    $lowongan->description = null;
    $data = array(
      'page' => 'Tambah',
      'row' => $lowongan
    );

    $this->template->load('template', 'lowongan/lowongan_form', $data);
  }
  public function edit($id)
  {
    $query = $this->mLowongan->getdata($id);
    if ($query->num_rows() > 0) {
      $lowongan = $query->row();
      $data = array(
        'page' => 'Edit',
        'row' => $lowongan
      );
      $this->template->load('template', 'lowongan/lowongan_form', $data);
    } else {
      echo "<script>alert('data tidak ditemukan')</script>";
      echo "<script>window.location='" . site_url('lowongan') . "'</script>";
    }
  }
  public function proses()
  {
    $post = $this->input->post(null, true);
    if (isset($_POST['Tambah'])) {
      $this->mLowongan->add($post);
    } else if (isset($_POST['Edit'])) {
      $this->mLowongan->edit($post);
    }

    if ($this->db->affected_rows() > 0) {
      echo "<script>alert('data berhasil di simpan')</script>";
    }
    echo "<script>window.location='" . site_url('lowongan') . "'</script>";
  }

  public function hapus($id)
  {
    $this->mLowongan->hapus($id);
    if ($this->db->affected_rows() > 0) {
      echo "<script>alert('data berhasil dihapus')</script>";
    }
    echo "<script>window.location='" . site_url('lowongan') . "'</script>";
  }
}
