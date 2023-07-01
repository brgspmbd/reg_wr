

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Business Forum</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Business Forum</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Business Forum</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="filterTable" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <td>User_Name</td>
                    <td>Image_Preview</td>
                    <th>Email</th>
                    <th>Salutation</th>
                    <th>Salutation_2</th>
                    <th>Full_Name</th>
                    <th>Country</th>
                    <th style="width:200px">Company</th>
                    <th>Position</th>
                    <th>Whatsapp_Number</th>
                    <th>Bukti_Transfer</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                    foreach($user as $u){ 
                  ?>
                  <tr>
                    <td><?php echo $u->id_user ?></td>
                    <td><?php echo $u->nama_user ?></td>
                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal<?php echo $u->id ?>">
                        Preview
                      </button></td>
                    <td><?php echo $u->email ?></td>
                    <td><?php echo $u->salutation ?></td>
                    <td><?php echo $u->salutation2 ?></td>
                    <td><?php echo $u->full_name ?></td>
                    <td><?php echo $u->country ?></td>
                    <td><?php echo $u->company ?></td>
                    <td><?php echo $u->position ?></td>
                    <td><?php echo $u->whatsappnumber ?></td>
                    <td><?php echo $u->bukti_transfer ?></td>
                  </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php 
    foreach($user as $d){ 
  ?>
  <div class="modal fade" id="modal<?php echo $d->id ?>">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Business Forum</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p class="text-bold">Name : <?php echo $d->nama_user ?> - <?php echo $d->company ?></p>
            <Img Style="Width: 50%" Src="<?Php Echo "https://amcorghatering.com/aarc2023/upload/bukti_tf/".$d->bukti_transfer; ?>">
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
  </div>
  <?php } ?>

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

<script>
  $("document").ready(function () {
    $("#filterTable").DataTable({
      "scrollX": true,
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": false,
    });
  });
</script>
</body>
</html>
