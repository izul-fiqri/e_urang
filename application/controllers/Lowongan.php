<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lowongan extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    check_not_login();
    $this->load->model('mLowongan');
  }
  public function index()
  {
    check_leader_and_admin();
    $data['row'] = $this->mLowongan->getdata();
    $this->template->load('template', 'lowongan/dataLowongan', $data);
  }

  public function add()
  {
    check_admin();
    $lowongan = new stdClass();
    $lowongan->lowongan_id = null;
    $lowongan->nama_lowongan = null;
    $lowongan->kuota = null;
    $lowongan->description = null;
    $lowongan->tgl_buka = null;
    $lowongan->tgl_tutup = null;

    $data = array(
      'page' => 'Tambah',
      'row' => $lowongan
    );

    $this->template->load('template', 'lowongan/lowongan_form', $data);
  }
  public function edit($id)
  {
    check_admin();
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
      $this->session->set_flashdata('success', 'Data berhasil disimpan');
    }
    redirect('lowongan');
  }

  public function hapus($id)
  {
    $this->mLowongan->hapus($id);
    if ($this->db->affected_rows() > 0) {
      // echo "<script>alert('data berhasil dihapus')</script>";
      $this->session->set_flashdata('success', 'Data berhasil dihapus');
    }
    // echo "<script>window.location='" . site_url('lowongan') . "'</script>";
    redirect('lowongan');
  }
}
