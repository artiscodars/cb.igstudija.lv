<?php
$section = "patient-data";
$subsection = "alergy";
$subsystem_title = "Pacienta dati";
include '../includes/header.php';
?>


 <div class="row g-0">

    <div class="col-xl-9 p-3">


        <?php include $_SERVER["DOCUMENT_ROOT"] . '/patient-data/menu.php'; ?>


<div class="alert alert-danger" role="alert">
    A simple danger alert—check it out!
</div>
<div class="alert alert-warning" role="alert">
    A simple warning alert—check it out!
</div>
<div class="alert alert-info" role="alert">
    A simple warning alert—check it out!
</div>


<div class="row">

    <div class="col">

        <div class="row">
            <div class="col"></div>
            <div class="col-md-auto text-end">
                <div class="input-group mb-2 minilist-search">
                    <input  class="form-control form-control-sm" type="text" ><button type="" class="btn btn-sm btn-link"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </div>

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
                    <td data-th="Alerģijas tipa kods"><span class="code">4675</span></td>
                    <td  data-th="Nosaukums"><span><b>Pārtikas alerģija</b></span></td>
                    <td data-th="Alergēna kods"><span class="code">A73</span></td>
                    <td  data-th="Alergēna nosaukums"><span>Kivi</span></td>
                    <td  data-th="Reakcijas"><a class="btn btn-primary btn-sm" data-bs-toggle="collapse" href="#link_1" role="button" aria-expanded="false" aria-controls="link_1">
                            <span class="open">Parādīt</span><span class="close">Aizvērt</span>
                            <i class="far fa-caret-square-down"></i></a></td>
                </tr>
                <tr class="collapse" id="link_1">
                    <td colspan="5" class="nested"><?php include 'nested-table.php'; ?></td>
                </tr>
                <!--- row END -->

                <!--- row --->
                <tr>
                    <td data-th="Alerģijas tipa kods"><span>3333</span></td>
                    <td data-th="Nosaukums"><span><b>Medikamentu alerģija</b></span></td>
                    <td data-th="Alergēna kods"><span>B13</span></td>
                    <td data-th="Alergēna nosaukums"><span>Paracetamols</span></td>
                    <td data-th="Reakcijas"><a class="btn btn-primary btn-sm" data-bs-toggle="collapse" href="#link_2" role="button" aria-expanded="false" aria-controls="link_2">
                            <span class="open">Parādīt</span><span class="close">Aizvērt</span>
                            <i class="far fa-caret-square-down"></i></a></td>
                </tr>
                <tr class="collapse" id="link_2">
                    <td colspan="5" class="nested"><?php include 'nested-table.php'; ?></td>
                </tr>
                <!--- row END -->


                <!--- row --->
                <tr>
                    <td class="kods" data-th="Alerģijas tipa kods"><span>3333</span></td>
                    <td data-th="Nosaukums"><span>
                        <b>Triveram 40 mg/10 mg/10 mg film-coated tablets</b>
                        <ul>
                            <li>Amlodipinum 10 mg</li>
                            <li>Atorvastatinum 40 mg</li>
                            <li>Perindoprili argininum 10 mg</li>
                        </ul>
                    </span></td>
                    <td class="kods" data-th="Alergēna kods"><span>B13</span></td>
                    <td data-th="Alergēna nosaukums"><span>Paracetamols</span></td>
                    <td data-th="Reakcijas"></td>
                </tr>

                <!--- row END -->



            </tbody>
        </table>


<ul class="pagination justify-content-end">
                        <!--- use from 2nd page
                      <li class="page-item">
                        <a class="page-link"><i class="fas fa-chevron-left"></i></a>
                      </li>
                        --->
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul>






    </div>


</div>



</div>



<div class="col p-3">
    <div class="sidebar">

        <?php include '../includes/patient-summary.php'; ?>

     



    </div>
</div>

</div>


<?php include '../includes/footer.php'; ?>
