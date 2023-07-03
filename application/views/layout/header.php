
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AARC 2023 | Admin</title>
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/logo-aarc-2023.png">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/fontawesome-free/css/all.min.css" type="text/css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- jQuery -->
  <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>dist/css/adminlte.min.css">
  <!-- JQGRID -->
  <!-- The jQuery library is a prerequisite for all jqSuite products -->
  <!-- This is the Javascript file of jqGrid -->   
  <script type="text/ecmascript" src="<?php echo base_url(); ?>assets/plugins/jqgrid/js/trirand/jquery.jqGrid.min.js"></script>
  <!-- This is the localization file of the grid controlling messages, labels, etc. -->
  <!-- We support more than 40 localizations -->
  <script type="text/ecmascript" src="<?php echo base_url(); ?>assets/plugins/jqgrid/js/trirand/i18n/grid.locale-en.js"></script>
  <!-- The link to the CSS that the grid needs -->
  <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>assets/plugins/jqgrid/css/jquery-ui.css" />
  <!-- The link to the CSS that the grid needs -->
  <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>assets/plugins/jqgrid/css/trirand/ui.jqgrid.css" />
    
  <!-- Select2 -->
  <script src="<?php echo base_url(); ?>assets/plugins/select2/js/select2.full.min.js"></script>
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('assets/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('assets/'); ?>dist/js/adminlte.min.js"></script>
  <style rel="stylesheet" type="text/css">
    .modal.modal-fullscreen .modal-dialog {
      width:100vw;
      height:100vh;
      margin:0;
      padding:0;
      max-width:none;
    }
    
    .modal.modal-fullscreen .modal-content {
      height:auto;
      height:100vh;
      border-radius:0;
      border:none;
    }
    
    .modal.modal-fullscreen .modal-body {
      overflow-y:auto;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
          <a href="<?php echo base_url('Login/Logout'); ?>" class="dropdown-item">
            <i class="fas fa-door-open mr-2"></i>Logout
          </a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
