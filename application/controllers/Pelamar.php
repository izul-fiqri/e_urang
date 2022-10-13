<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelamar extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('mPelamar');
  }
  public function index()
  {
    $data['row'] = $this->mPelamar->getdata();
    $this->template->load('template', 'pelamar/dataPelamar', $data);
  }

  public function add()
  {
    $pelamar = new stdClass();
    $pelamar->pelamar_id = null;
    $pelamar->nama = null;
    $pelamar->kouta = null;
    $pelamar->description = null;
    $data = array(
      'page' => 'Tambah',
      'row' => $pelamar
    );

    $this->template->load('template', 'pelamar/pelamar_form', $data);
  }
  public function edit($id)
  {
    $query = $this->mPelamar->getdata($id);
    if ($query->num_rows() > 0) {
      $pelamar = $query->row();
      $data = array(
        'page' => 'Edit',
        'row' => $pelamar
      );
      $this->template->load('template', 'pelamar/pelamar_form', $data);
    } else {
      echo "<script>alert('data tidak ditemukan')</script>";
      echo "<script>window.location='" . site_url('pelamar') . "'</script>";
    }
  }
  public function proses()
  {
    $post = $this->input->post(null, true);
    if (isset($_POST['Tambah'])) {
      $this->mPelamar->add($post);
    } else if (isset($_POST['Edit'])) {
      $this->mPelamar->edit($post);
    }

    if ($this->db->affected_rows() > 0) {
      echo "<script>alert('data berhasil di simpan')</script>";
    }
    echo "<script>window.location='" . site_url('pelamar') . "'</script>";
  }

  public function hapus($id)
  {
    $this->mPelamar->hapus($id);
    if ($this->db->affected_rows() > 0) {
      echo "<script>alert('data berhasil dihapus')</script>";
    }
    echo "<script>window.location='" . site_url('pelamar') . "'</script>";
  }
  public function detail($id)
  {
    $query = $this->mPelamar->getdata($id);
    if ($query->num_rows() > 0) {
      $pelamar = $query->row();
      $data = array(
        'row' => $pelamar
      );
      $this->template->load('template', 'pelamar/detail_pelamar', $data);
    }
  }
}
