

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
              <li class="breadcrumb-item active">Activity</li>
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
                <h3 class="card-title">Data Activity</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="form-group row">
                  <div class="col-sm-12">
                    <center>
                      <table id="list_activity"></table>
                    </center>
                    <div id="list_activityPager"></div>
                  </div>
                  <input type="BUTTON" id="bedata" value="Add Data" />
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
      $("#list_activity").jqGrid({
        url: '<?php echo base_url(); ?>mst_activity/list_activity',
        datatype: "json",
         rownumbers: true,
        colModel: [
          { label: 'Id', name: 'id', index: 'id', width: 30, key:true},
          { label: 'Activity Code', name: 'activity_code', index: 'activity_code',width: 120 ,editable:true},             
          { label: 'Activity Name', name: 'activity_name', index: 'activity_name',width: 220 ,editable:true},             
          { label: 'Location', name: 'location', index: 'location',width: 200,editable:true },             
          { label: 'Capacity', name: 'kapasitas', index: 'kapasitas',width: 100,editable:true },     
        ],
        viewrecords: true, // show the current page, data rang and total records on the toolbar
        width: "100%",
        shrinkToFit: false,
        height: '100%',
        rowNum: 10,
        pager: "#list_activityPager",
        editurl: "<?php echo base_url(); ?>mst_activity/edit_activity",
        onSelectRow: function(id, selected) {
            var id = ($('#list_activity').getCell(id, 'id'));
            if (id != null) {
              $("#id").val(id);
            }
        },
      });
jQuery("#list_activity").jqGrid('gridResize',{minWidth:350,maxWidth:800,minHeight:80, maxHeight:350});
      jQuery("#list_activity").jqGrid('navGrid', "#list_activityPager", {
        view: false,
        edit: false,
        add: false,
        del: false,
        search: false,
        refreshtext: 'Reload',
      });
      jQuery("#list_activity").jqGrid('inlineNav', "#list_activityPager", {
        edit: true,
        add: false,
        save: true,
        cancel: true,
        edittext: "Edit ",
        savetext: "Save",
        canceltext: "Cancel",
      });
      $("#list_activity").navButtonAdd("#list_activityPager", {
         caption: "Down",
         title: "Click here to Calculate",
         buttonicon: "ui-icon-arrowthickstop-1-s",
         onClickButton: function() {
         }
      });
      $("#bedata").click(function(){
        jQuery("#list_activity").jqGrid('editGridRow',"new",{height:280,reloadAfterSubmit:false});
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
