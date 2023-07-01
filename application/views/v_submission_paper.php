

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Submission Paper</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Submission Paper</li>
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
                <h3 class="card-title">Submission Paper</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Id_User</th>
                    <th>Full_Name</th>
                    <th>Paper_Id</th>
                    <th>Crrespnding_Author</th>
                    <th>Date_Of_Birth</th>
                    <th>Origin_Country</th>
                    <th>Institution</th>
                    <th>Email</th>
                    <th>Alternative_Email</th>
                    <th>Phone_Number</th>
                    <th>Present_At_The_Venue</th>
                    <th>Paper_Title</th>
                    <th>First_Author_Name</th>
                    <th>First_Author_Institution</th>
                    <th>Additional_Author_Name</th>
                    <th>Additional_Author_Institution</th>
                    <th>Full_Paper</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                    foreach($user as $u){ 
                  ?>
                  <tr>
                    <td><?php echo $u->id ?></td>
                    <td><?php echo $u->nama_user ?></td>
                    <td><?php echo $u->paper_id ?></td>
                    <td><?php echo $u->corresponding_author ?></td>
                    <td><?php echo $u->date_of_birth ?></td>
                    <td><?php echo $u->origin_country ?></td>
                    <td><?php echo $u->institution ?></td>
                    <td><?php echo $u->email ?></td>
                    <td><?php echo $u->alternative_email ?></td>
                    <td><?php echo $u->phone_number ?></td>
                    <td><?php echo $u->present_at_the_venue ?></td>
                    <td><?php echo $u->paper_tittle ?></td>
                    <td><?php echo $u->first_author_name ?></td>
                    <td><?php echo $u->first_author_institution ?></td>
                    <td><?php echo $u->additional_author_name ?></td>
                    <td><?php echo $u->additional_author_institution ?></td>
                    <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal<?php echo $u->id ?>">
                      Preview
                    </button>
                  </td>
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
  <div class="modal fade modal-fullscreen" id="modal<?php echo $d->id ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"><?php echo $d->paper_tittle ?></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body p-0">
          <embed Src="<?Php Echo "https://amcorghatering.com/aarc2023/upload/paper/".$d->full_paper; ?>" frameborder="0" width="100%" height="800px">
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
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
    $("#example2").DataTable({
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
