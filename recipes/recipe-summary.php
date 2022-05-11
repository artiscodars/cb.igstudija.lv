<?php
$section = "recipes";
$subsystem_title = "Recepte";
include '../includes/header.php';
?>

<div class="container">
    <div class="steps mt-3">
        <ul>
            <li>
                <a href="/auth/select-country.php" class="done"><span class="num">1</span><span class="name">Medikamenta izvēle</span></a>
            </li>
            <li>
                <a href="/auth/select-country.php" class="done"><span class="num">2</span><span class="name">Priekšskatīt</span></a>
            </li>
            <li>
                <a href="/auth/select-country.php" class="active"><span class="num">3</span><span class="name">Izsniegšana</span></a>
            </li>
        </ul>
    </div>


    <div class="alert alert-success" role="alert">
        Medikamenta izsniegšana reģistrēta Vācijas e-veselības sistēmā. <br>
        Medikamentu drīkst izsniegt pacientam.
    </div>


    <div class="card recipe">
        <div class="card-body">
            <label>Receptes numurs</label><br>
            <div class="recipe-id fs-5">14195155552596218</div>

        </div>
    </div>


    <div class="card">
        <div class="card-body">




            <div class="form-data">
                <div class="mb-2">
                    <label>Izsniedzamais medikaments</label>
                    <div class="recipe-id me-2">15-0212-01</div>Triveram 20mg/10mg/5mg apvalkotās tabletes, 30, 20 mg/10 mg/5mg 
                </div>
                <div class="mb-2">
                    <label>Zāles (kods/nosaukums)</label>
                    <div class="recipe-id me-2">15-0212</div> Triveram 20mg/10mg/5mg apvalkotās tabletes
                </div>
                <div class="mb-2">
                    <label>Izrakstītā aktīvā viela (ATĶ kods/nosaukums)</label>








                    <div class="accordion" id="aco-rew">




                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-items">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#items" aria-expanded="true" aria-controls="items">
                                    <div class="recipe-id me-2">C10BX11</div> Atorvastatīns, amlodipīns un perindoprils
                                </button>
                            </h2>
                            <div id="items" class="accordion-collapse collapse show" aria-labelledby="heading-items" data-bs-parent="#aco-rew">
                                <div class="accordion-body">



                                    <div class="mb-2">
                                        <label>Iekļautās aktīvās vielas</label>


                                        <table  class="table">
                                            <thead>
                                                <tr>
                                                    <th>Kods</th>
                                                    <th>Nosaukums</th>
                                                    <th>Stiprums</th>
                                                </tr>

                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><div class="recipe-id me-2">Nav informācijas</div></td>
                                                    <td>Atorvastatin</td>
                                                    <td>20 mg</td>
                                                </tr>
                                                <tr>
                                                    <td><div class="recipe-id me-2">Nav informācijas</div></td>
                                                    <td>Perindopril arginine</td>
                                                    <td>10 mg</td>
                                                </tr>
                                                <tr>
                                                    <td><div class="recipe-id me-2">Nav informācijas</div></td>
                                                    <td>Amlodipine</td>
                                                    <td>5 mg</td>
                                                </tr>
                                            </tbody>
                                        </table>


                                    </div>



                                </div>
                            </div>
                        </div>



                    </div>



                </div>
                <div class="mb-2">
                    <label>Zāļu forma</label>
                    Apvalkotā tablete
                </div>
                <div class="mb-2">
                    <label>Zāļu komerciālais nosaukums</label>
                    Triveram 20mg/10mg/5mg apvalkotās tabletes
                </div>
                <div class="mb-2">
                    <label>Lietošanas veids</label>
                    Perorālai/iekšķīgai lietošanai
                </div>

                <div class="row">
                    <div class="col-6">
                        <label>Daudzums iepakojumā</label>
                        30
                    </div>
                    <div class="col-6">
                        <label>Izsniegto iepakojumus skaits</label>
                        1
                    </div>
                    <div class="col-6">
                        <label>Kopējais izsniegtais skaits</label>
                        30
                    </div>
                    <div class="col-6">
                        <label>Aizvietots</label>
                        Jā
                    </div> 
                </div>

            </div>




        </div>
    </div>

    <div class="row mt-3">



        <div class="col">
            <a type="submit" href="/recipes/recipe-dispensing-final.php" class="btn btn-success">Izsniegt pacientam</a>
        </div>

        <div class="col-auto text-end">
            <a type="submit"  href="/recipes/recipe-dispensing-cancel.php" class="btn btn-outline-primary">Atcelt izniegšanu</a>
        </div>

    </div>


</div>






<?php include '../includes/footer.php'; ?>
