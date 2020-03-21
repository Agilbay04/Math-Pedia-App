<body class="bg-gradient-primary">
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tambah Data Admin</h6>
  </div>
    <div class="card-body">
    <?php echo form_open_multipart('admin/Admin/inputadm');?>
      <div class="form-group">
        <input type="text" class="form-control" id="id" name="id" hidden>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Nama Lengkap</label>
        <input type="text" class="form-control" id="nama" name="nama">
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Jenis Kelamin</label>
        <select class="form-control" id="exampleFormControlSelect1" name="jk">
          <option value="Laki-laki">Laki-laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">No HP</label>
        <input type="text" class="form-control" id="hp" name="hp">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Alamat</label>
        <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Username</label>
        <input type="text" class="form-control" id="uname" name="uname">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Password</label>
        <input type="password" class="form-control" id="pass" name="pass">
      </div>
      <div class="form-group">
        <label for="exampleFormControlFile1">Foto Profil</label>
        <input type="file" class="form-control-file" id="foto" name="foto">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="hak" name="hak" value="Admin" hidden>
      </div>
      <button type="submit" class="btn btn-success btn-block">Simpan</button>
      <a href="<?php echo base_url().'admin/Admin/admin';?>" type="submit" class="btn btn-danger btn-block">Batal</a>
    <?php echo form_close(); ?>
    </div>
  </div>
</div>

</body>