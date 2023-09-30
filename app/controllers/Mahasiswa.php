<?php

class Mahasiswa extends Controller {
  public function index(){
    $data['judul'] = 'Halaman Mahasiswa';
    $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
    $this->view('templates/header', $data);
    $this->view('mahasiswa/index', $data);
    $this->view('templates/footer');
  }
  public function detail($Id)
  {
    $data['judul'] = 'Halaman Mahasiswa';
    $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($Id);
    $this->view('templates/header', $data);
    $this->view('mahasiswa/detail', $data);
    $this->view('templates/footer');
  }
  public function tambah()
  {
  if($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST)>0)
  {
    Flasher::setFlash('berhasil','ditambahkan','success');
    header('Location: ' .BASEURL. '/Mahasiswa');
    exit;
  } else 
          {
            Flasher::setFlash('gagal','ditambahkan','danger');
            header('Location: ' .BASEURL. '/Mahasiswa');
          }
  }
  public function hapus($Id)
  {
    if($this->model('Mahasiswa_model')->hapusDataMahasiswa($Id)>0)
  {
    Flasher::setFlash('berhasil','dihapus','success');
    header('Location: ' .BASEURL. '/Mahasiswa');
    exit;
  } else 
          {
            Flasher::setFlash('gagal','ditambahkan','danger');
            header('Location: ' .BASEURL. '/Mahasiswa');
            exit;
          }
}
  public function getubah()
  {
    var_dump($_POST);
  }
}