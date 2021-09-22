<html>

<head>
    <title><?php echo $subsystem_title; ?> - Pacientu datu apmaiņas sistēma</title>
    <meta charset="utf-8">
    <meta http-equiv="Pragma" content="no-cache">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">

    <link href="https://cdn.datatables.net/1.11.2/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.2/b-2.0.0/cr-1.5.4/fc-3.3.3/fh-3.1.9/r-2.2.9/sc-2.0.5/sp-1.4.0/datatables.min.css"/>

    <?php $styletime = date("YmdHi", filemtime($_SERVER["DOCUMENT_ROOT"] . "/style/style.min.css")); ?>

    <link href="/style/style.min.css?v=<?php echo $styletime; ?>" rel="stylesheet">






</head>

<body>

<div class="wrapper">


  <div class="subsystem-title ps-3">
    <div class="title">Atskaites</div>
    <a href="#" class="close"><i class="bi bi-x-circle-fill"></i></a>
  </div>



<?php if($section == 'list') { ?>
<?php include $_SERVER["DOCUMENT_ROOT"].'/reports/list-header.php'; ?>
<?php } ?>

<?php if($section == 'edit') { ?>
<?php include $_SERVER["DOCUMENT_ROOT"].'/reports/edit-header.php'; ?>
<?php } ?>

<?php if($section == 'view') { ?>
<?php include $_SERVER["DOCUMENT_ROOT"].'/reports/view-header.php'; ?>
<?php } ?>
