

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
              <li class="breadcrumb-item active">User</li>
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
                <h3 class="card-title">Data User</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="form-group row">
                  <div class="col-sm-12">
                    <center>
                      <table id="list_user"></table>
                    </center>
                    <div id="list_userPager"></div>
                  </div>
                </div>
                <br>
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


<script type="text/javascript">
    $(document).ready(function () {
      $("#list_user").jqGrid({
        url: '<?php echo base_url(); ?>mst_user/list_user',
        datatype: "json",
         rownumbers: true,
        colModel: [
          { label: 'Id', name: 'id', index: 'id', width: 30, key:true},
          { label: 'Email', name: 'email', index: 'email',width: 120,editable:true },             
          { label: 'Title', name: 'title', index: 'title',width: 25 },             
          { label: 'Full Name', name: 'full_name', index: 'full_name',width: 200,editable:true },             
          { label: 'Phone', name: 'phone_number', index: 'phone_number',width: 100,editable:true },             
          { label: 'Country', name: 'country', index: 'country',width: 100 },             
          { label: 'Type Of Attendence', name: 'type_of_attendance', index: 'type_of_attendance',width: 150,editable:true },   
          { label: 'Status Approved', name: 'status_approved', index: 'status_approved',width: 150 },   
          { label: 'Organization', name: 'organization', index: 'organization',width: 250 },   
          { label: 'Work Unit', name: 'workunit', index: 'workunit',width: 250 },   
        ],
        viewrecords: true, // show the current page, data rang and total records on the toolbar
        width: "100%",
        shrinkToFit: false,
        height: '100%',
        rowNum: 10,
        pager: "#list_userPager",
        editurl: "<?php echo base_url(); ?>mst_user/edit_user",
        onSelectRow: function(id, selected) {
            var id = ($('#list_user').getCell(id, 'id'));
            if (id != null) {
              $("#id").val(id);
            }
        },
      });
      jQuery("#list_user").jqGrid('navGrid', "#list_userPager", {
        view: false,
        edit: false,
        add: false,
        del: false,
        search: false,
        refreshtext: 'Reload',
      });
      jQuery("#list_user").jqGrid('inlineNav', "#list_userPager", {
        edit: true,
        add: false,
        save: true,
        cancel: true,
        edittext: "Edit ",
        savetext: "Save",
        canceltext: "Cancel",
      });
      $("#list_user").navButtonAdd("#list_userPager", {
         caption: "Down",
         title: "Click here to Calculate",
         buttonicon: "ui-icon-arrowthickstop-1-s",
         onClickButton: function() {
         }
      });
  });
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

  })
  // DropzoneJS Demo Code End
</script>
</body>
</html>
