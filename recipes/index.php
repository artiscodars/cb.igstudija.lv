<?php
$section = "recipes";
$subsystem_title = "Receptes";
include '../includes/header.php'; ?>



      <div class="row g-0">

        <div class="col-md-9 p-3">
          <h2>Receptes</h2>
          <?php include 'recipe-list-item-ok.php'; ?>
          <?php include 'recipe-list-item-ok.php'; ?>
          <?php include 'recipe-list-item-not-ok.php'; ?>
          <?php //include 'recipe-list-item-ok.php'; ?>
            <?php //include 'recipe-list-item-not-ok.php'; ?>
              <?php //include 'recipe-list-item-not-ok.php'; ?>
        </div>



        <div class="col p-3">
          <div class="sidebar">
          <h2>Kontaktinformācija</h2>
          <?php include 'contactinfo.php'; ?>
        </div>
        </div>

      </div>






  <?php include '../includes/footer.php'; ?>
