<?php

class Home extends Controller{
  //membuat method default
  public function index () {
    $data['judul'] = 'Halaman Home/Index';
    $this->view('templates/header',$data );
    $this->view('home/index');
    $this->view('templates/footer');
  }
}