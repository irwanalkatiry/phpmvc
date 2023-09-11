<?php
class About extends Controller{
  public function index () {
    
    $data['judul']='Halaman About/index';
    $this->view('templates/header', $data);
    $this->view('About/index');
    $this->view('templates/footer');
  }
  
  public function page($nama = 'Irwan', $NamaIstri = 'Dinda', $sifat = 'ngamukan' ) {
    
    $data['nama']=$nama;
    $data['NamaIstri']=$NamaIstri;
    $data['sifat']=$sifat;
    $data['judul']='About Us';
    $this->view('templates/header',$data);
    $this->view('About/page', $data);
    $this->view('templates/footer');
  }
}