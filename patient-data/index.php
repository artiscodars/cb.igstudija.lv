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

  <div class="section">
  <h4>Alerģijas un nepanesamības <a href="page.php"><i class="fas fa-chevron-right"></i></a></h4>
  <?php include 'card-data.php';  ?>

  </div>

  <div class="section">
  <h4>Medicīniskās ierīces <a href="page.php"><i class="fas fa-chevron-right"></i></a></h4>
  <?php include 'card-empty.php';  ?>
  </div>

  <div class="section">
  <h4>Lietojamās zāles <a href="page.php"><i class="fas fa-chevron-right"></i></a></h4>
  <?php include 'card-data.php';  ?>
    <?php include 'card-data.php';  ?>

  </div>



</div>
<div class="col">

  <div class="section">
  <h4>Problēmas un diagnozes <a href="page.php"><i class="fas fa-chevron-right"></i></a></h4>
  <?php include 'card-data.php';  ?>
    <?php include 'card-data.php';  ?>

  </div>

  <div class="section">
  <h4>Nozīmīgākās ķirurģiskās procedūras pēdējo 6 mēn. laikā <a href="page.php"><i class="fas fa-chevron-right"></i></a></h4>
  <?php include 'card-no-data.php';  ?>
  </div>


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
