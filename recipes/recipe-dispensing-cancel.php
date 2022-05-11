<?php
$section = "recipes";
$subsystem_title = "Recepte";
include '../includes/header.php';
?>


<div class="row g-0 justify-content-md-center">

    <div class="col-md-8 p-3 content">

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
        
        <div class="validation">
            <i class="fas fa-sync"></i>
            <div>
                Lūdzu, uzgaidiet – notiek zāļu izsniegšanas <b>atcelšanas</b> reģistrācija <b>Vācijas</b> e-veselības sistēmā, kas var aizņemt ilgāku laiku. 
                <br> <br>
                Pēc reģistrācijas atcelšanas Jūs saņemsiet paziņojumu no <b>Vācijas</b> e-veselības sistēmas, ka reģistrācija atcelta.
                <br> <br>
                Zāļu izsniegšanu varēs uzsākt no jauna.


            </div>
        </div>

    </div>
    
</div>

    <script>

        setTimeout(function () {
            window.location.href = '/recipes/recipe.php?p=canceled'; // the redirect goes here

        }, 3000); // 3 seconds

    </script>





    <?php include '../includes/footer.php'; ?>
