

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>
                  <?php 
                    foreach($user as $u){
                      echo $u->jumlah_user;
                    }
                  ?>
                </h3>

                <p>User</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?= base_url(''); ?>user" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>
                  <?php 
                    foreach($approved as $u){
                      echo $u->jumlah_approved;
                    }
                  ?>
                </h3>

                <p>User Approved</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?= base_url(''); ?>user_approved" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>
                  <?php 
                    foreach($bf as $u){
                      echo $u->jumlah_bf;
                    }
                  ?>
                </h3>

                <p>Business Forum</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="<?= base_url(''); ?>business_forum" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>
                  <?php 
                    foreach($sp as $u){
                      echo $u->jumlah_sp;
                    }
                  ?>
                </h3>

                <p>Submission Paper</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="<?= base_url(''); ?>submission_paper" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <div class="row">
            
            <div class="col">
            <!-- TABLE: LATEST ORDERS -->
                <div class="card">
                  <div class="card-header border-transparent">
                    <h3 class="card-title">Latest Input</h3>
    
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table m-0">
                        <thead>
                        <tr>
                          <th>ID</th>
                          <th>Email</th>
                          <th>Full Name</th>
                          <th>Status</th>
                          <th>Organization</th>
                          <th>Work Unit</th>
                        </tr>
                        </thead>
                        <tbody>
                            
                        <?php 
                          foreach($latest as $l){ 
                        ?>
                        <tr>
                            <td><?php echo $l->id ?></td>
                            <td><?php echo $l->email ?></td>
                            <td><?php echo $l->full_name ?></td>
                            <?php 
                              if($l->status_approved == "approved"){ 
                            ?>
                            <td><span class="badge badge-success"><?php echo $l->status_approved ?></span></td>
                            <?php 
                              }else{ 
                            ?>
                            <td><span class="badge badge-warning"><?php echo $l->status_approved ?></span></td>
                            <?php 
                              } 
                            ?>
                            <td><?php echo $l->organization ?></td>
                            <td><?php echo $l->workunit ?></td>
                        </tr>
                        
                        <?php } ?>
                        </tbody>
                      </table>
                    </div>
                    <!-- /.table-responsive -->
                  </div>
                  <!-- /.card-body -->
                  <!-- /.card-footer -->
                </div>
            </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <strong>Copyright &copy; 2023 <a href="#">AARC_2023</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url('assets/'); ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/'); ?>dist/js/adminlte.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url('assets/'); ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

</body>
</html>
