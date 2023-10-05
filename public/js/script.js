$(function() {
  
  $('.tombolTambahData').on('click', function(){
    
    $('#judulModal').html('Tambah Data Mahasiswa');
    $('.modal-footer button[type=submit]').html('Tambah Data');
      $('#nama').val('');
      $('#nim').val('');
      $('#jurusan').val('');
      
    
  });
  
  $('.tampilModalUbah').on('click', function() {
      $('#judulModal').html('Ubah Data Mahasiswa');
      $('.modal-footer button[type=submit]').html('Ubah Data');
      $('.modal-body form').attr('action','http://localhost:8080/Phpmvc/Mahasiswa/ubah');
      
      const id = $(this).data('id');
      
      $.ajax({
        //ambil data dari url utk mengembalikan data sesuai data yg dikirimkan (id)
        url: 'http://localhost:8080/Phpmvc/Mahasiswa/getubah',
        //id kiri nama data yg dikirimkan, yg kanan isi data (const id)
        data: {id},
       //data dikirimkan menggunakan method apa
        method: 'POST',
        //jadikan datanya jadi json agar array assoc bisa digunakqn jQuery
        dataType: 'json',
        //fungsion menerima parameter(data) dari getubah
        success : function(data){
          $('#nama').val(data.nama);
          $('#nim').val(data.nim);
          $('#jurusan').val(data.jurusan);
          $('#id').val(data.id);
        }
        
        
      });
  });
  
});