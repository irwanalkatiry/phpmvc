$(function() {
  
  $('.tombolTambahData').on('click', function(){
    
    $('#judulModal').html('Tambah Data Mahasiswa');
    $('.modal-footer button[type=submit]').html('Tambah Data');
  });
  
  $('.tampilModalUbah').on('click', function() {
      $('#judulModal').html('Ubah Data Mahasiswa');
      $('.modal-footer button[type=submit]').html('Ubah Data');
      
      const id = $(this).data('Id');
      
      $.ajax({
        //ambil data dari url utk mengembalikan data sesuai data yg dikirimkan (id)
        url: 'http://localhost:8080/Phpmvc/public/Mahasiswa/getubah',
        //id kiri nama data yg dikirimkan, yg kanan isi data (const id)
        data: {"id" : id},
       //data dikirimkan menggunakan method apa
        method: 'post',
        //fungsion menerima parameter(data) dari getubah
        success : function(data){
          console.log(data);
        }
        
        
      });
  });
  
});