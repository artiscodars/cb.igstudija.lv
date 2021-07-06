<html>

<head>
    <title><?php echo $subsystem_title; ?> - Pacientu datu apmaiņas sistēma</title>
    <meta charset="utf-8">
    <meta http-equiv="Pragma" content="no-cache">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">

    <?php

    $styletime = date("YmdHi", filemtime($_SERVER["DOCUMENT_ROOT"] . "/style/style.min.css")); ?>

    <link href="/style/style.min.css?v=<?php echo $styletime; ?>" rel="stylesheet">

</head>

<body>

<div class="subsystem-title">
  <div class="title"><?php echo $subsystem_title; ?></div>
  <a href="#" class="close"></a>
</div>


<?php if ($section == 'patient-data') { ?>

<?php include $_SERVER["DOCUMENT_ROOT"].'/patient-data/patient-header.php'; ?>
<?php include $_SERVER["DOCUMENT_ROOT"].'/patient-data/menu.php'; ?>

<?php } else { ?>

<?php include $_SERVER["DOCUMENT_ROOT"].'/recipes/recipe-header.php'; ?>

<?php } ?>


<div class="content-holder">
