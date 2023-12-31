

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
        url: '<?php echo base_url(); ?>user/list_user',
        datatype: "json",
         rownumbers: true,
        colModel: [
          { label: 'Id', name: 'id', index: 'id', width: 30 },
          { label: 'Email', name: 'email', index: 'email',width: 120 },             
          { label: 'Title', name: 'title', index: 'title',width: 25 },             
          { label: 'Full Name', name: 'full_name', index: 'full_name',width: 120 },             
          { label: 'Phone', name: 'phone', index: 'phone',width: 100 },             
          { label: 'Country', name: 'country', index: 'country',width: 100 },             
          { label: 'Organization', name: 'organization', index: 'organization',width: 220 },   
          { label: 'Time', name: 'time_menit', index: 'time_menit',width: 150 },   
        ],
        viewrecords: true, // show the current page, data rang and total records on the toolbar
        width: 1050,
        shrinkToFit: false,
        height: '100%',
        rowNum: 10,
	      subGrid: true,
        // define the icons in subgrid
        subGridOptions: {
          "plusicon"  : "ui-icon-triangle-1-e",
          "minusicon" : "ui-icon-triangle-1-s",
          "openicon"  : "ui-icon-arrowreturn-1-e"
        },
        subGridRowExpanded: function(subgrid_id, row_id) {
          var subgrid_table_id, pager_id;
          subgrid_table_id = subgrid_id+"_t";
          pager_id = "p_"+subgrid_table_id;
          $("#"+subgrid_id).html("<table id='"+subgrid_table_id+"' class='scroll'></table><div id='"+pager_id+"' class='scroll'></div>");
          jQuery("#"+subgrid_table_id).jqGrid({
            url:"subgrid.php?q=2&id="+row_id,
            url: '<?php echo base_url(); ?>user/list_subuser?id='+row_id,
            datatype: "json",
            colModel: [
              { label: 'Id', name: 'id', index: 'id', width: 30 },
              { label: 'Check In', name: 'time_check_out', index: 'time_check_out',width: 150 },             
              { label: 'Check Out', name: 'time_check_in', index: 'time_check_in',width: 150 },             
              { label: 'Total Menit', name: 'total_menit', index: 'total_menit',width: 100 },             
              { label: 'Activity', name: 'activity', index: 'activity',width: 300 },       
            ],
            rowNum:20,
            pager: pager_id,
            sortname: 'id',
            sortorder: "asc",
            height: '100%'
          });
          jQuery("#"+subgrid_table_id).jqGrid('navGrid',"#"+pager_id,{search: false,edit:false,add:false,del:false})
        },
        pager: "#list_userPager",
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
        edit: false,
        add: false,
        save: false,
        cancel: false,
        edittext: "Edit ",
        savetext: "Save",
        canceltext: "Cancel",
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
