<?php
$section = "recipes";
$subsystem_title = "Recepte";
include '../includes/header.php';
?>

<div class="container">
    <div class="steps mt-3">
        <ul>
            <li>
                <a href="#" class="done"><span class="num">1</span><span class="name">Medikamenta izvēle</span></a>
            </li>
            <li>
                <a href="#" class="done"><span class="num">2</span><span class="name">Priekšskatīt</span></a>
            </li>
            <li>
                <a href="#" class="active"><span class="num">3</span><span class="name">Izsniegšana</span></a>
            </li>
        </ul>
    </div>



    <div class="card recipe">
        <div class="card-body">
            <label>Receptes numurs</label><br>
            <div class="recipe-id fs-5">14195155552596218</div>

        </div>
    </div>
    
    
    
     <div class="row  justify-content-md-center">
         <div class="col-md-6">
             <div class="text-center">
                 Ja pacients vēlas iegādāties zāles, lūdzu, nospiediet zaļo pogu “Izsniegt pacientam”.

                 <div class="red mt-3">Ja pacients nevēlas iegādāties zāles, lūdzu, nospiediet pogu “Atcelt izsniegšanu” un sagaidiet atbilstošu paziņojumu no Vācijas e-veselības sistēmas, ka zāļu izsniegšana ir atcelta.</div>
             </div>
         </div>
    
         
     </div>

    

    <div class="row mt-3">

        <div class="col-auto">
            <a type="submit"  href="/recipes/recipe-summary.php" class="btn btn-outline-primary">Atpakaļ</a>
        </div>


        <div class="col text-center">
            <a type="submit" href="/recipes/index.php" class="btn btn-success">Izsniegt pacientam</a>
        </div>

        <div class="col-auto text-end">
            <a type="submit"  href="/recipes/recipe-dispensing-cancel.php" class="btn btn-outline-primary">Atcelt izniegšanu</a>
        </div>

    </div>


</div>






<?php include '../includes/footer.php'; ?>
