          <!-- Page Heading -->
          <!-- <h1 class="h3 mb-2 text-gray-800">Data Admin</h1> -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Rumus Matematika</h6>
            </div>
            <div class="card-header py-3">
            <a href="<?php echo base_url(). 'admin/Rumus/tbhrms'; ?>" class="btn btn-success btn-icon-split btn-sm">
              <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
              </span>
              <span class="text">Tambah Data Rumus</span>
            </a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr class="text-center">
                      <th>NO</th>
                      <th>RUMUS</th>
                      <th>GAMBAR RUMUS</th>
                      <th>AKSI</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $no=1; 
                      foreach ($rumus_mm as $rms): 
                    ?>
                    <tr class="text-center">
                      <td><?=$no++?></td>
                      <td><?=$rms->nama_rms?></td>
                      <td><img src="<?php echo base_url('upload/rumus/'.$rms->det_rms)?>" width="100" alt="foto"></td>
                      <td width="250">
											<a href="<?php echo base_url().'admin/Rumus/ubhrms/'.$rms->id_rms; ?>"
											 class="btn btn-small text-primary"><i class="fas fa-edit"></i> Edit</a>
											<a href="<?php echo base_url().'admin/Rumus/hapusrms/'.$rms->id_rms; ?>" 
                        class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
											<a href="<?php echo base_url().'admin/Lihat/rms/'.$rms->id_rms; ?>" 
                        class="btn btn-small text-success"><i class="fas fa-info"></i> Lihat Rumus</a>
										</td>
                    </tr>
                    <?php endforeach;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

</body>

</html>
