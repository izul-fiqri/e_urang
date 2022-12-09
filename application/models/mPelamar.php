<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mPelamar extends CI_Model
{
  public function getdata($id = null)
  {
    $this->db->select('*');
    $this->db->from('pelamar');
    if ($id != null) {
      $this->db->where('pelamar_id', $id);
    }
    $query = $this->db->get();
    return $query;
  }

  // $daftar->pendidikan_terakhir = null;
  // $daftar->nama_sekolah = null;
  // $daftar->jurusan = null;
  // $daftar->foto_profil = null;
  // $daftar->file_ktp = null;
  // $daftar->file_ijazah = null;
  // $daftar->file_transkrip = null;
  // $daftar->file_skck = null;
  // $daftar->file_cv = null;

  public function add($post)
  {
    $params = [
      'lowongan_id' => $post['pilih_lowonngan'],
      'nama' => $post['nama'],
      'nik' => $post['nik'],
      'jenis_kelamin' => $post['jenis_kelamin'],
      'tempat_lahir' => $post['tempat_lahir'],
      'tgl_lahir' => $post['tgl_lahir'],
      'alamat' => $post['alamat'],
      'no_tlp' => $post['no_tlp'],
      'email' => $post['email'],
      'pendidikan_terakhir' => $post['pendidikan'],
      'nama_sekolah' => $post['sekolah'],
      'jurusan' => $post['jurusan'],
      'foto_profil' => $post['foto'],
      'file_ktp' => $post['ktp'],
      'file_transkrip' => $post['transkrip'],
      'file_skck' => $post['skck'],
      'file_cv' => $post['cv'],
    ];
    $this->db->insert('pelamar', $params);
  }

  public function edit($post)
  {
    $params = [
      'nama_pelamar' => $post['nama_pelamar'],
      'kouta' => $post['kuota'],
      'description' => $post['deskripsi']
    ];

    $this->db->where('pelamar_id', $post['id']);
    $this->db->update('pelamar', $params);
  }

  public function hapus($id)
  {
    $this->db->where('pelamar_id', $id);
    $this->db->delete('pelamar');
  }
}
