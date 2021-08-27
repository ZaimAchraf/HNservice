<?php

global $lang;

include_once "header.php";

?>

    <style>
        .layout-navbar-fixed.layout-fixed .wrapper .control-sidebar{
            width: 0 !important;
            display: block;
        }

        .os-content .mb-4:first-of-type {
            position: fixed;
            top: 58px;
            right: 20px;
            float: right;
            display: block;
            background-color: #7d7d7d;
            padding: 0 8px;
            cursor: pointer;
        }
    </style>

<!-- Navbar -->
  <?php include_once "navbar.php"; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    <?php include_once "sidebar.php"; ?>

  <!-- Content Wrapper. Contains page content -->

  <!-- /.content-wrapper -->
    {{ content }}
    <!-- Footer Container -->
<?php include_once "footer.php"; ?>