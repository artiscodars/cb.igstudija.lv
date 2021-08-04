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

        <th scope="col">Kods</th>
        <th scope="col">Nosaukums</th>
        <th scope="col">Datums</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="kods"><span>LK785</span></td>
        <td><a href="#">Kaut kāds nosaukums nedaudz garāks nekāM</a></td>
        <td>06.05.2021</td>
      </tr>
      <tr>

      <td class="kods"><span>LK785</span></td>
        <td><a href="#">Kaut kāds nosaukums</a> </td>
        <td>06.05.2021</td>
      </tr>
      <tr>

        <td class="kods"><span>LK785</span></td>
        <td><a href="#">Kaut kāds nosaukums mazliet vēl</a></td>
        <td>06.05.2021</td>
      </tr>
      <tr>

        <td class="kods"><span>LK785</span></td>
        <td><a href="#">Kaut kāds nosaukums nedaudz garāks nekāM</a></td>
        <td>06.05.2021</td>
      </tr>
      <tr>

      <td class="kods"><span>LK785</span></td>
        <td><a href="#">Kaut kāds nosaukums</a> </td>
        <td>06.05.2021</td>
      </tr>
      <tr>

        <td class="kods"><span>LK785</span></td>
        <td><a href="#">Kaut kāds nosaukums mazliet vēl</a></td>
        <td>06.05.2021</td>
      </tr>
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
