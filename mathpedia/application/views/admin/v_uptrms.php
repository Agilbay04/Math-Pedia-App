<body class="bg-gradient-primary">
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Update Data Rumus</h6>
  </div>
    <div class="card-body">
    <?php foreach($rumus_mm as $rms) : ?>
    <form action="<?php echo base_url(). 'index.php/admin/Rumus/updaterms'; ?>" enctype="multipart/form-data" method="POST">
      <div class="form-group">
        <input type="text" class="form-control" id="id" name="id" hidden>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Rumus</label>
        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $rms->nama_rms?>">
      </div>
      <div class="form-group">
        <label for="exampleFormControlFile1">Gambar Rumus</label>
        <div>
            <img src="<?php echo base_url('upload/rumus/'.$rms->det_rms);?>" width="100" alt="">
        </div>
        <br>
        <input type="file" class="form-control-file" id="rumus" name="rumus" value="<?php echo base_url('upload/rumus/'.$rms->det_rms);?>">
      </div>
      <div class="form-group">
        <label for="kategori">Kategori</label>
        <select class="form-control" id="exampleFormControlSelect1" name="ktg">
            <option value="<?php echo $rms->id_kategori?>"><?php echo $rms->nama_ktg?></option>
            <?php foreach($kategori as $ktg) : ?>
                <option value="<?php echo $ktg['id_kategori'];?>"><?php echo $ktg['nama_ktg'];?></option>
            <?php endforeach; ?>
        </select>
      </div>
      <button type="submit" class="btn btn-success btn-block">Simpan</button>
      <a href="<?php echo base_url().'index.php/admin/Rumus/rumus';?>" type="submit" class="btn btn-danger btn-block">Batal</a>
    </form>
    <?php endforeach; ?>
    </div>
  </div>
</div>

</body>