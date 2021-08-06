<?php
$section = "patient-data";
$state = "active";
$subsystem_title = "Alerģijas un nepanesamības ";
include '../includes/header.php'; ?>


      <div class="row g-0">

        <div class="col-lg-9 p-3">


          <div class="alert alert-danger" role="alert">
            A simple danger alert—check it out!
          </div>
          <div class="alert alert-warning" role="alert">
            A simple warning alert—check it out!
          </div>


<div class="row">

<div class="col">

  <?php// include 'card-data.php'; ?>



  <table class="table table-hover table-cb">
    <thead>
      <tr>

        <th scope="col">Alerģijas tipa kods</th>
        <th scope="col">Nosaukums</th>
        <th scope="col">Alergēna kods</th>
        <th scope="col">Alergēna nosaukums</th>
        <th scope="col">Reakcijas</th>
      </tr>
    </thead>
    <tbody>
      <!--- row --->
      <tr>
        <td class="kods"><span>4675</span></td>
        <td><a href="#">Pārtikas alerģija</a></td>
        <td class="kods"><span>A73</span></td>
        <td>Kivi</td>
        <td><a class="btn btn-primary btn-sm" data-bs-toggle="collapse" href="#link_1" role="button" aria-expanded="false" aria-controls="link_1">
          <span class="open">Parādīt</span><span class="close">Aizvērt</span>
          <i class="far fa-caret-square-down"></i></a></td>
      </tr>
      <tr class="collapse" id="link_1">
      <td colspan="5" class="nested"><?php include 'nested-table.php'; ?></td>
      </tr>
      <!--- row END -->

      <!--- row --->
      <tr>
        <td class="kods"><span>3333</span></td>
        <td><a href="#">Medikamentu alerģija</a></td>
        <td class="kods"><span>B13</span></td>
        <td>Paracetamols</td>
        <td><a class="btn btn-primary btn-sm" data-bs-toggle="collapse" href="#link_2" role="button" aria-expanded="false" aria-controls="link_2">
<span class="open">Parādīt</span><span class="close">Aizvērt</span>
          <i class="far fa-caret-square-down"></i></a></td>
      </tr>
      <tr class="collapse" id="link_2">
      <td colspan="5" class="nested"><?php include 'nested-table.php'; ?></td>
      </tr>
      <!--- row END -->



    </tbody>
  </table>









</div>


</div>



        </div>



        <div class="col-lg-3 p-3">
          <div class="sidebar">

          <?php include '../includes/contactinfo.php'; ?>

          <?php include '../includes/contact-person.php'; ?>

        </div>
        </div>

      </div>


<?php include '../includes/footer.php'; ?>
