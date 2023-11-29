  <div class="container mt-3">

    <div class="row">
      <div class="col-lg-6">
        <?php Flasher::flash(); ?>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                  Tambah Data Mahasiswa
        </button>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <form action="<?php echo BASEURL; ?>/mahasiswa/cari" method='POST'>
          <div class="mt-3 input-group">
            <input type="text" class="form-control" placeholder="cari mahasiswa..." name="keyword" id="keyword" autocomplete="off">
            <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
          </div>
        </form>
      </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <h3 class="mt-3">Daftar Mahasiswa</h3>
            <ul>
                <?php foreach($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item" style="display:flex; justify-content:space-between;">
                        <?php echo $mhs['nama']; ?>
                        <div>
                          <a href="<?php echo BASEURL; ?>/mahasiswa/hapus/<?php echo $mhs['id']; ?>" class="badge bg-danger" style="text-decoration:none;" onClick="return confirm('yakin')">Hapus</a>
                          <a href="<?php echo BASEURL; ?>/mahasiswa/ubah/<?php echo $mhs['id']; ?>" class="badge bg-success tampilModalUbah" style="text-decoration:none;" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?php echo $mhs['id']; ?>">Ubah</a>
                          <a href="<?php echo BASEURL; ?>/mahasiswa/detail/<?php echo $mhs['id']; ?>" class="badge bg-primary" style="text-decoration:none;">Detail</a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
        <form action="<?php echo BASEURL; ?>/mahasiswa/tambah" method="POST">
        <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>
          <div class="form-group">
            <label for="nrp" class="form-label">NRP</label>
            <input type="number" class="form-control" id="nrp" name="nrp">
          </div>
          <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
          <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select name="jurusan" id="jurusan" class="form-control">
              <option value="Teknik Inforamtika">Teknik Informatika</option>
              <option value="Teknik Industri">Teknik Industri</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
        </div>
    </div>
  </div>
</div>