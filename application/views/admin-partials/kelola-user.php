         <!-- Begin Page Content -->
         <div class="container-fluid">
             <div class="card shadow mb-4">
                 <div class="card-header py-4">
                     <h5 class="m-0 font-weight-bolt text-primary float-left">Data User</h5>
                     <a href="" class="btn btn-primary btn-sm float-right">Tambah User</a>
                 </div>
                 <div class="card-body">
                     <div class="table-responsive">
                         <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                             <thead class="table-light">
                                 <th>No</th>
                                 <th>Nama</th>
                                 <th>Username</th>
                                 <th>Password</th>
                                 <th>Akses</th>
                                 <th>Action</th>
                             </thead>
                             <?php
                                $no = 1;
                                foreach ($user as $data) {
                                ?>
                             <tbody>
                                 <td><?php echo $no++ ?></td>
                                 <td><?php echo $data->NM_USER; ?></td>
                                 <td><?php echo $data->USERNAME; ?></td>
                                 <td><?php echo $data->PASSWORD; ?></td>
                                 <td><?php echo $data->AKSES; ?></td>
                                 <td>
                                     <a href="<?php echo base_url(); ?>purchasing/edit/"
                                         class="btn btn-success">Edit</a>
                                     <a href="<?php echo base_url(); ?>purchasing/delete/"
                                         class="btn btn-danger">Hapus</a>
                                 </td>
                             </tbody>
                             <?php } ?>
                         </table>
                     </div>
                 </div>
             </div>
             <!-- /.container-fluid -->

         </div>
         <!-- End of Main Content -->