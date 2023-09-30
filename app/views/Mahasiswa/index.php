<div class="container mt-3">
  
  <div class="row">
    <div class="col lg-6">
      <?php Flasher::flash(); ?>
    </div>
  </div>
  
  <div class="row">
    <div class="col lg-6">
      <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
        Tambah Data Mahasiswa
      </button>
      <br></br>
      <h3>Daftar Mahasiswa</h3>
        <ul class="list-group">
             <?php foreach ($data['mhs'] as $mhs) : ?>
              <li class="list-group-item">
                   <?=$mhs['nama'];?> 
                   <a href="<?=BASEURL;?>/Mahasiswa/detail/<?=$mhs['Id'];?>" class="badge text-bg-primary float-end me-1">detail</a>
                   <a href="<?=BASEURL;?>/Mahasiswa/ubah/<?=$mhs['Id'];?>" class="badge text-bg-success float-end me-1 tampilModalUbah"  data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?=$mhs['Id'];?>">ubah</a>
                   <a href="<?=BASEURL;?>/Mahasiswa/hapus/<?=$mhs['Id'];?>" class="badge text-bg-danger float-end me-1" onclick="return confirm('yakin ingin menghapus?');">hapus</a>
              </li>
             <?php endforeach ; ?>
        </ul>
    </div>
  </div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Tambah data mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
        <form action="<?=BASEURL;?>/Mahasiswa/tambah" method="post">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>
          <div class="mb-3">
            <label for="nim" class="form-label">Nim</label>
            <input type="text" class="form-control" id="nim" name="nim">
          </div>
        <div class="form-group mb-3">
        <label for="jurusan">Jurusan</label>
        <select class="form-control" id="jurusan" name="jurusan">
          <option value="TI">TI</option>
          <option value="RMD">RMD</option>
          <option>TEKNIK SIPIL</option>
          <option>TEKNIK NGEONG</option>
          <option>TEKNIK GUK GUK</option>
        </select>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
      </form>
      </div>
    </div>
  </div>
</div>