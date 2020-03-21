<body class="bg-gradient-primary">
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Mathpedia</h6>
  </div>
    <div class="card-body">
    <?php foreach($rumus_mm as $rms) : ?>
    <form action="" enctype="multipart/form-data" method="POST">
      <div class="form-group">
        <input type="text" class="form-control" id="id" name="id" value="<?php echo $rms->id_rms?>" hidden>
      </div>
      <h1 for="exampleFormControlInput1" class="text-center">Rumus <?php echo $rms->nama_rms?></h1>
      <div class="form-group">
        <div class="text-center">
          <img src="<?php echo base_url('upload/rumus/'.$rms->det_rms);?>" class="text-center" width="800" alt="">
        </div>
        <br>
      </div>
      <a href="<?php echo base_url().'admin/Rumus/rumus';?>" type="submit" class="btn btn-danger btn-block">Kembali</a>
    </form>
    <?php endforeach; ?>
    </div>
  </div>
</div>

</body>