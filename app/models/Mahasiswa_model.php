<?php

class Mahasiswa_model{
  private $tabel = 'Mahasiswa';
  private $db; //untuk menampung database
  
  public function __construct() //panggil koneksi database
  {
    $this->db = new Database;
  }
  
  public function getAllMahasiswa()
   {
      $this->db->query('SELECT * FROM ' .$this->tabel);
      return $this->db->resultSet();
  }
  public function getMahasiswaById($Id)
  {
    $this->db->query('SELECT * FROM ' .$this->tabel. ' WHERE Id=:Id');
    $this->db->bind('Id', $Id);
    return $this->db->single();
  }
}