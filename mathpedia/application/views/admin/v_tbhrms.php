<body class="bg-gradient-primary">
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tambah Data Rumus</h6>
  </div>
    <div class="card-body">
    <?php echo form_open_multipart('admin/Rumus/inputrms');?>
      <div class="form-group">
        <input type="text" class="form-control" id="id" name="id" hidden>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Rumus</label>
        <input type="text" class="form-control" id="nama" name="nama">
      </div>
      <div class="form-group">
        <label for="exampleFormControlFile1">Gambar Rumus</label>
        <input type="file" class="form-control-file" id="rumus" name="rumus">
      </div>
      <div class="form-group">
        <label for="kategori">Kategori</label>
        <select class="form-control" id="exampleFormControlSelect1" name="ktg">
          <?php foreach($kategori as $ktg) : ?>
          <option value="<?php echo $ktg['id_kategori'];?>"><?php echo $ktg['nama_ktg'];?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <button type="submit" class="btn btn-success btn-block">Simpan</button>
      <a href="<?php echo base_url().'index.php/admin/Rumus/rumus';?>" type="submit" class="btn btn-danger btn-block">Batal</a>
    <?php echo form_close(); ?>
    </div>
  </div>
</div>

</body>