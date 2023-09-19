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
}