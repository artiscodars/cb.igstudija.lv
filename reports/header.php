<html>

<head>
    <title><?php echo $subsystem_title; ?> - Pacientu datu apmaiņas sistēma</title>
    <meta charset="utf-8">
    <meta http-equiv="Pragma" content="no-cache">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">

    <link href="https://cdn.datatables.net/1.11.2/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.11.3/af-2.3.7/b-2.0.1/b-colvis-2.0.1/b-html5-2.0.1/b-print-2.0.1/cr-1.5.4/date-1.1.1/fc-4.0.0/fh-3.2.0/r-2.2.9/rg-1.1.3/rr-1.2.8/sc-2.0.5/sb-1.2.2/sp-1.4.0/sl-1.3.3/datatables.min.css"/>





    <!-- Select2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />

    <!-- select2-bootstrap-5-theme -->
    <link href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.1.1/dist/select2-bootstrap-5-theme.min.css" rel="stylesheet"> <!-- for local development env -->




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
