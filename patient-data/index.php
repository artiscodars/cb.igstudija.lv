<?php
$section = "patient-data";
$subsystem_title = "Pacienta dati";
include '../includes/header.php'; ?>


      <div class="row g-0">

        <div class="col-md-9 p-3">


          <div class="alert alert-danger" role="alert">
            A simple danger alert—check it out!
          </div>
          <div class="alert alert-warning" role="alert">
            A simple warning alert—check it out!
          </div>


<div class="row">

<div class="col">

  <?php include 'section.php'; ?>

    <?php include 'section-empty.php'; ?>

      <?php include 'section-no-data.php'; ?>


</div>
<div class="col">

</div>

</div>



        </div>



        <div class="col p-3">
          <div class="sidebar">

          <?php include '../includes/contactinfo.php'; ?>

          <?php include '../includes/contact-person.php'; ?>

        </div>
        </div>

      </div>


<?php include '../includes/footer.php'; ?>
