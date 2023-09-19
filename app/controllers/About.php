<?php
class About extends Controller{
  public function index () {
    
    $data['nama'] = $this->model('user_Model')->getUser();
    $data['Jurusan'] = 'Kesehatan';
    $data['judul']='Halaman About/index';
    $this->view('templates/header', $data);
    $this->view('About/index', $data);
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