

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User Approved</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Approved</li>
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
                <h3 class="card-title">Data User Approved</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="filterTable" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Status</th>
                    <th>Action</th>
                    <th>Photo</th>
                    <th>Email</th>
                    <th>Tittle</th>
                    <th>Name</th>
                    <th>Phone_Number</th>
                    <th>Country</th>
                    <th style="width: 200px">Organization</th>
                    <th>Level</th>
                    <th style="width: 200px">Work_Unit</th>
                    <th>Type_Of_Attendance</th>
                    <th>Activity_1</th>
                    <th>Activity_2</th>
                    <th>Activity_3</th>
                    <th>Activity_4</th>
                    <th>Activity_5</th>
                    <th>Activity_6</th>
                    <th>Activity_7</th>
                    <th>Activity_8</th>
                    <th>Activity_9</th>
                    <th>Activity_10</th>
                    <th>Activity_11</th>
                    <th>Activity_12</th>
                    <th>Activity_13</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                    foreach($user as $u){ 
                  ?>
                  <tr>
                    <td><?php echo $u->id ?></td>
                    <td><?php echo $u->status_approved ?></td>
                    <td>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal<?php echo $u->id ?>">
                        Edit
                      </button>
                    </td>
                    <td><Img Style="Width: 50%" Src="<?Php Echo "https://amcorghatering.com/aarc2023/upload/bukti_tf/".$u->bukti_transfer; ?>"></td>
                    <td><?php echo $u->email ?></td>
                    <td><?php echo $u->title ?></td>
                    <td><?php echo $u->full_name ?></td>
                    <td><?php echo $u->phone_number ?></td>
                    <td><?php echo $u->country ?></td>
                    <td><?php echo $u->organization ?></td>
                    <td><?php echo $u->level ?></td>
                    <td><?php echo $u->workunit ?></td>
                    <td><?php echo $u->type_of_attendance ?></td>
                    <td><?php echo $u->activity1 ?></td>
                    <td><?php echo $u->activity2 ?></td>
                    <td><?php echo $u->activity3 ?></td>
                    <td><?php echo $u->activity4 ?></td>
                    <td><?php echo $u->activity5 ?></td>
                    <td><?php echo $u->activity6 ?></td>
                    <td><?php echo $u->activity7 ?></td>
                    <td><?php echo $u->activity8 ?></td>
                    <td><?php echo $u->activity9 ?></td>
                    <td><?php echo $u->activity10 ?></td>
                    <td><?php echo $u->activity11 ?></td>
                    <td><?php echo $u->activity12 ?></td>
                    <td><?php echo $u->activity13 ?></td>
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
  <!-- Edit modal -->
  <?php 
    foreach($user as $d){ 
  ?>
  <div class="modal fade" id="modal<?php echo $d->id ?>">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">User Approval</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p class="text-bold">Name : <?php echo $d->full_name ?></p>
            <Img Style="Width: 50%" Src="<?Php Echo "https://amcorghatering.com/aarc2023/upload/bukti_tf/".$d->bukti_transfer; ?>">
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <form action="<?php echo base_url('User_approved/approve')?>" method="post">
              <input type="hidden" value="<?php echo $d->id ?>" name="id"></input>
              <button type="submit" class="btn btn-primary">Unapprove</button>
            </form>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
  </div>
  <?php } ?>
<!-- End Edit modal -->

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
