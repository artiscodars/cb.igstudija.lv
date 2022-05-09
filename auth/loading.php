<?php
$subsystem_title = "Personas identifikācija";
$class = 'auth';
include '../includes/header.php';
?>

<div class="container">


    <div class="steps">
        <ul>
            <li>
                <a href="/auth/select-country.php" class="done"><span class="num">1</span><span class="name">Valsts izvēle</span></a>
            </li>
            <li>
                <a href="/auth/identify-person.php" class="active"><span class="num">2</span><span class="name">Personas identifikācija</span></a>
            </li>
            <li>
                <a href="/auth/data-validation.php"><span class="num">3</span><span class="name">Datu pārbaude</span></a>
            </li>
        </ul>
    </div>


   
 

    <div class="row pt-3">
        <div class="col text-center">
            
            <div class="loader mt-3">
            
            <div uk-spinner="ratio: 3"></div>
            </div>
            
            <div class="mt-3 loader-info">
            Lūdzu, uzgaidiet – notiek Jūsu norādītās personas meklēšana <br>
            <b>Vācijas e-veselības sistēmā</b>, kas var aizņemt ilgāku laiku.
            </div>
            
             <a type="submit" href="/auth/identify-person.php" class="btn btn-outline-primary mt-3">Atpakaļ</a>

          

        </div>


       

    </div>
</div>
</div>

<?php include '../includes/footer.php'; ?>
