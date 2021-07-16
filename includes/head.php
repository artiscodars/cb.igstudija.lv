<?php
$saite = $_SERVER['REQUEST_URI'];
$url = 'http://' . $_SERVER['SERVER_NAME'] . $saite;
?>

<head>
    <title>PĀRROBEŽU PACIENTA DATU APMAIŅAS SISTĒMA</title>
    <meta charset="utf-8">
    <meta http-equiv="Pragma" content="no-cache">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">

    <?php

    $styletime = date("YmdHi", filemtime($_SERVER["DOCUMENT_ROOT"] . "/style/style.min.css")); ?>

    <link href="/style/style.min.css?v=<?php echo $styletime; ?>" rel="stylesheet">

</head>
