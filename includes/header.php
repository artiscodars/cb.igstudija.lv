<html>

    <head>
        <title><?php echo $subsystem_title; ?> - Pacientu datu apmaiņas sistēma</title>
        <meta charset="utf-8">
        <meta http-equiv="Pragma" content="no-cache">
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
        
        <link href="https://cdn.datatables.net/1.11.2/css/dataTables.bootstrap5.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.2/b-2.0.0/cr-1.5.4/fc-3.3.3/fh-3.1.9/r-2.2.9/sc-2.0.5/sp-1.4.0/datatables.min.css"/>
        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.13.10/dist/css/uikit.min.css" />
        <?php $styletime = date("YmdHi", filemtime($_SERVER["DOCUMENT_ROOT"] . "/style/style.css")); ?>
        <link href="/style/style.css?v=<?php echo $styletime; ?>" rel="stylesheet">

    </head>

    <body class="<?php echo $class; ?>">

        <div class="wrapper">


            <div class="subsystem-title ps-3">
                
                <div class="title"><?php echo $subsystem_title; ?></div>
                <div class="system-user">
                <b>Aleks Egle</b>, Daugavpils reģionālā slimnīca, Sabiedrība ar ierobežotu atbildību 
                </div>
                <a href="#" class="close"><span>Beigt darbu</span><i class="fas fa-sign-out-alt"></i></a>
            </div>


            <?php if ($section == 'patient-data') { ?>

                <?php include $_SERVER["DOCUMENT_ROOT"] . '/patient-data/patient-header.php'; ?>
                <?php include $_SERVER["DOCUMENT_ROOT"] . '/patient-data/menu.php'; ?>

            <?php } elseif ($section == 'recipes') { ?>

                <?php include $_SERVER["DOCUMENT_ROOT"] . '/recipes/recipe-header.php'; ?>

            <?php } elseif ($section == 'reports') { ?>

                <?php include $_SERVER["DOCUMENT_ROOT"] . '/reports/reports-header.php'; ?>

            <?php } ?>
