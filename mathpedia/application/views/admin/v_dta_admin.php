          <!-- Page Heading -->
          <!-- <h1 class="h3 mb-2 text-gray-800">Data Admin</h1> -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Admin</h6>
            </div>
            <div class="card-header py-3">
            <a href="<?php echo base_url(). 'index.php/admin/Admin/tbhadm'; ?>" class="btn btn-success btn-icon-split btn-sm">
              <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
              </span>
              <span class="text">Tambah Data Admin</span>
            </a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr class="text-center">
                      <th>NO</th>
                      <th>FOTO</th>
                      <th>NAMA</th>
                      <th>JENIS KELAMIN</th>
                      <th>NO HP</th>
                      <th>ALAMAT</th>
                      <th>USERNAME</th>
                      <th>STATUS</th>
                      <th>AKSI</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                      $no=1; 
                      foreach ($admin as $adm): 
                    ?>
                    <tr class="text-center">
                      <td><?=$no++?></td>
                      <td><img src="<?php echo base_url('upload/admin/'.$adm->foto_adm)?>" width="100" alt="foto"></td>
                      <td><?=$adm->nama_adm?></td>
                      <td><?=$adm->jk_adm?></td>
                      <td><?=$adm->no_hp?></td>
                      <td><?=$adm->alamat_adm?></td>
                      <td><?=$adm->username_adm?></td>
                      <td><?=$adm->status?></td>
                      <td width="250">
                        <a href="<?php echo base_url().'index.php/admin/Admin/ubhadm/'.$adm->id_adm; ?>"
                        class="btn btn-small text-primary"><i class="fas fa-edit"></i> Edit</a>
                        <a href="<?php echo base_url().'index.php/admin/Admin/hapusadm/'.$adm->id_adm; ?>" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										  </td>
                    </tr>
                    <?php endforeach;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

</body>

</html>
