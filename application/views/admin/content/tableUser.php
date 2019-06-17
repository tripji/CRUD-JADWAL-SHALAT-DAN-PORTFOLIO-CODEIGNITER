          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tabel User</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Tabel Jadwal -->
            <div class="card shadow mb-4">
            <div class="card-header py-3">
              <button class="btn btn-sm btn-primary"><a href="<?php echo base_url('user/tambah');?>" class="icon text-white">Tambah Data</a></button>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Username</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Username</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                    foreach ($admin as $d) {
                      ?>                    
                    <tr>
                      <td><?php echo $d->id ?></td>
                      <td><?php echo $d->username ?></td>
                      <td>
                        <button class="btn btn-sm btn-success"><a href="<?php echo base_url('user/edit/'.$d->id);?>" class="icon text-white">Edit</a></button>
                         <button class="btn btn-sm btn-danger"><a href="<?php echo base_url('user/hapus/'.$d->id);?>" class="icon text-white">Hapus</a></button>
                      </td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- Content Row -->
