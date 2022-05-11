<?php
$section = "recipes";
$subsystem_title = "Receptes";
include '../includes/header.php';
?>



<div class="row g-0">

    <div class="col-md-9 p-3">

        <div class="row pb-3 d-flex align-items-center">
            <div class="col">
                <h2 class="fs-4 m-0">Receptes</h2>
            </div>
            <div class="col-auto text-end">
                <div class="input-group minilist-search">
                    <input  class="form-control form-control-sm" type="text" placeholder="Meklēt"><button type="" class="btn btn-sm btn-link"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </div>

        <?php include 'recipe-list-item-ok.php'; ?>
        <?php include 'recipe-list-item-ok.php'; ?>
        <?php include 'recipe-list-item-not-ok.php'; ?>
        <?php include 'recipe-list-item-ok.php'; ?>
        <?php include 'recipe-list-item-not-ok.php'; ?>
        <?php include 'recipe-list-item-not-ok.php';  ?>
    </div>



    <div class="col p-3">
        <div class="sidebar">

            <?php include '../includes/contactinfo.php'; ?>
        </div>
    </div>

</div>






<?php include '../includes/footer.php'; ?>
