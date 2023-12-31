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
  public function tambahDataMahasiswa($data)
  {
   $query = "INSERT INTO Mahasiswa (nama,nim,jurusan) VALUES (:nama,:nim,:jurusan)";
  
  $this->db->query($query);
  $this->db->bind('nama',$data['nama']);
  $this->db->bind('nim',$data['nim']);
  $this->db->bind('jurusan',$data['jurusan']);
  
  $this->db->execute();
   return $this->db->rowCount();
  }
  public function hapusDataMahasiswa($Id)
  {
   $query = "DELETE FROM Mahasiswa WHERE Id=:Id";
  
  $this->db->query($query);
  $this->db->bind('Id',$Id);
  
  $this->db->execute();
  
   return $this->db->rowCount();
  }
  
  public function ubahDataMahasiswa($data)
  {
   $query = "UPDATE Mahasiswa
             SET nama =:nama,
                 nim =:nim,
                 jurusan =:jurusan
             WHERE id =:id
             "; 
  
  $this->db->query($query);
  $this->db->bind('nama',$data['nama']);
  $this->db->bind('nim',$data['nim']);
  $this->db->bind('jurusan',$data['jurusan']);
  $this->db->bind('id',$data['id']);
  
  $this->db->execute();
   return $this->db->rowCount();
  }
  public function cariDataMahasiswa ()
  {
    $keyword =$_POST['keyword'];
    $query = "
    SELECT * FROM Mahasiswa WHERE nama LIKE :keyword
    ";
    $this->db->bind('keyword', '%keyword%');
    $this->db->query($query);
    
    return $this->db->resultSet();
  }
}