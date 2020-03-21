<body class="bg-gradient-primary">
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Update Data Admin</h6>
  </div>
    <div class="card-body">
    <?php foreach($admin as $adm) : ?>
    <form action="<?php echo base_url(). 'admin/Admin/updateadm'; ?>" enctype="multipart/form-data" method="POST">
      <div class="form-group">
        <input type="text" class="form-control" id="id" name="id" value="<?php echo $adm->id_adm?>" hidden>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Nama Lengkap</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $adm->nama_adm?>">
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Jenis Kelamin</label>
        <select class="form-control" id="exampleFormControlSelect1" name="jk">
          <option value="<?php echo $adm->$jk_adm?>"><?php echo $adm->$jk_adm?></option>
          <option value="Laki-laki">Laki-laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">No HP</label>
        <input type="text" class="form-control" id="hp" name="hp" value="<?php echo $adm->no_hp?>">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Alamat</label>
        <textarea class="form-control" id="alamat" name="alamat" rows="3"><?php echo $adm->alamat_adm?></textarea>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Username</label>
        <input type="text" class="form-control" id="uname" name="uname" value="<?php echo $adm->username_adm?>">
      </div>
      <div class="form-group">
        <label for="exampleFormControlFile1">Foto Profil</label>
        <div>
          <img src="<?php echo base_url('upload/admin/'.$adm->foto_adm);?>" width="300" alt="">
        </div>
        <br>
        <input type="file" class="form-control-file" id="foto" name="foto" value="<?php echo base_url('upload/admin/'.$adm->foto_adm);?>" >
      </div>
      <button type="submit" class="btn btn-success btn-block">Simpan</button>
      <a href="<?php echo base_url().'admin/Admin/admin';?>" type="submit" class="btn btn-danger btn-block">Batal</a>
    </form>
    <?php endforeach; ?>
    </div>
  </div>
</div>

</body>