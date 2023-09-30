$(function() {
  
  $('.tombolTambahData').on('click', function(){
    
    $('#judulModal').html('Tambah Data Mahasiswa');
    $('.modal-footer button[type=submit]').html('Tambah Data');
  });
  
  $('.tampilModalUbah').on('click', function() {
      $('#judulModal').html('Ubah Data Mahasiswa');
      $('.modal-footer button[type=submit]').html('Ubah Data');
      
      const id = $(this).data('id');
      
      $.ajax({
        //ambil data dari url utk mengembalikan data sesuai data yg dikirimkan (id)
        url: 'http://localhost:8080/Phpmvc/mahasiswa/getubah',
        //id kiri nama data yg dikirimkan, yg kanan isi data (const id)
        data: {id},
       //data dikirimkan menggunakan method apa
        method: 'POST',
        //fungsion menerima parameter(data) dari getubah
        success : function(data){
          console.log(data);
        }
        
        
      });
  });
  
});