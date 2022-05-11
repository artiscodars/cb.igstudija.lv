<?php
$subsystem_title = "Personas identifikācija";
$class = 'auth';
include '../includes/header.php';
?>

<div class="container">


    <div class="steps mb-3 mt-3">
        <ul>
            <li>
                <a href="/auth/select-country.php" class="done"><span class="num">1</span><span class="name">Valsts izvēle</span></a>
            </li>
            <li>
                <a href="/auth/select-country.php" class="done"><span class="num">2</span><span class="name">Personas identifikācija</span></a>
            </li>
            <li>
                <a href="/auth/select-country.php" class="active"><span class="num">3</span><span class="name">Datu pārbaude</span></a>
            </li>
        </ul>
    </div>


    <div class="alert alert-info" role="alert">
        Lūdzu, pārbaudiet, vai no <b>Vācijas e-veselības sistēmas</b> saņemtie personas demogrāfiskie dati sakrīt ar uzrādītajā dokumentā redzamajiem datiem. Pārliecinieties, vai saņemtā un norādītā informācija sakrīt!
    </div>


    <div class="row pt-3">
        <div class="col-md-6">

            <div class="list">
                <div class="list-row">
                    <label>Vārds:</label>
                    <div>Ingrid</div>
                </div>
               <div class="list-row">
                    <label>Uzvārds:</label>
                    <div>Vasserman</div>
                </div>
               <div class="list-row">
                    <label>Dzimums:</label>
                    <div>Sieviete</div>
                </div>
                <div class="list-row">
                    <label>Dzimšanas datums:</label>
                    <div>12.03.1997</div>
                </div>
                <div class="list-row">
                    <label>Iela:</label>
                    <div>Stralauer Platz 36, Friedrichshain-Kreuzberg</div>
                </div>
                <div class="list-row">
                    <label>Pasta indekss:</label>
                    <div>10243</div>
                </div>
               <div class="list-row">
                    <label>Pilsēta:</label>
                    <div>Berlin</div>
                </div>


            </div>

            <div class="mt-3">

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="identificets">
                    <label class="form-check-label" for="identificets">
                        Pacients ir identificēts un ir devis piekrišanu
                    </label>
                </div>
            </div>



            <a href="/auth/identify-person.php" class="btn btn-outline-primary mt-3">Atpakaļ</a>
            <a href="/patient-data/" class="btn btn-primary mt-3 ">Pacienta pamatdati</a><?php /*add class "disabled" when cbox not selected disabled */ ?>
            <a href="/recipes/" class="btn btn-primary mt-3">Receptes</a><?php /*add class "disabled" when cbox not selected disabled */ ?>

        </div>


        <div class="col left-border pt-3 pb-3">
            <h3>Dokumentu paraugi</h3>

            <div class="gallery" uk-lightbox="animation: fade">
                <a href="../images/pase.jpg"  data-caption="Pase" ><img src="../images/pase.jpg"><span>Pase</span></a>
                <a href="../images/id-karte.jpg"  data-caption="ID karte" ><img src="../images/id-karte.jpg"><span>ID karte</span></a>
            </div>



        </div>

    </div>
</div>
</div>

<?php include '../includes/footer.php'; ?>
