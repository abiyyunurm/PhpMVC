<div class="container mt-3">

  <div class="row">
    <div class="col-lg-6">
       <?php Flasher::flash(); ?>
    </div>
  </div>


  <div class="row mb-3">
    <div class="col-lg-6">
      
    <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
            Tambah Data Mahasiswa
</button>
    </div>
  </div>


  <div class="row mb-3">
    <div class="col-lg-6">
    <form action="<?= BASEURL; ?>/Mahasiswa/cari" method="post">
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Cari Mahasiswa.." name="keyword" id="keyword" aria-label="Recipient's username" aria-describedby="button-addon2">
        <div class="input-group-append">
          <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
  </div>
</div>
    
    </form>
    </div>
  </div>

    <div class="row">
        <div class="col-6">
       

            <h3>Daftar Mahasiswa</h3>

            <ul class="list-group">
                <?php foreach( $data['mhs'] as $mhs) : ?>

                    <li class="list-group-item">
                        <?= $mhs['nama'];?>
                        <a href="<?= BASEURL; ?>/Mahasiswa/hapus/ <?= $mhs['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Yakin ?')">Hapus </a>
                        <a href="<?= BASEURL; ?>/Mahasiswa/ubah/ <?= $mhs['id']; ?>" class="badge badge-success float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id']; ?>">Ubah </a>
                        <a href="<?= BASEURL; ?>/Mahasiswa/detail/ <?= $mhs['id']; ?>" class="badge badge-info float-right ml-1">Detail </a>
                    </li>

                <?php endforeach; ?>   
            </ul>
        </div>
    
    </div>
 

</div>

 
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/Mahasiswa/tambah" method="post">

        <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label for="nrp">Nrp</label>
    <input type="number" class="form-control" id="nrp" name="nrp" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email " class="form-control" id="email" name="email" autocomplete="off" required>
  </div>

  <div class="form-group">
    <label for="jurusan">Jurusan</label>
    <select class="form-control" id="jurusan" name="jurusan" autocomplete="off" required>
      <option value="Teknik Informatika">TIF</option>
      <option value="Teknik Mesin">TMS</option>
      <option value="Teknik Industri">TIS</option>
      <option value="Teknik Pangan">TPN</option>
      <option value="Teknik Planologi">TPL</option>
      <option value="Teknik Lingkungan">TL</option>
    </select> 
  </div>

  


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>