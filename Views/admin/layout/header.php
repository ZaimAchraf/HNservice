<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/Storage/Statics/images/logo.png">

    <title><?= $data['title'];?></title>

    <?php
        include_once "links/headerLinks.php";
        if (isset($data['datatable']))
            include_once dirname(dirname(__DIR__)) . "/datatable/datatableHeaderLinks.php";
    ?>

</head>
<body class="sidebar-mini layout-fixed layout-navbar-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="/adminLTE/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>