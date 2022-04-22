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
                <a href="/auth/select-country.php" class="active"><span class="num">2</span><span class="name">Personas identifikācija</span></a>
            </li>
            <li>
                <a href="/auth/select-country.php"><span class="num">3</span><span class="name">Datu pārbaude</span></a>
            </li>
        </ul>
    </div>


    <div class="alert alert-info" role="alert">
        Lūdzu, ievadiet ārzemnieka personas kodu, kas ir redzams ārzemnieka uzrādītajā dokumentā. Vienlaikus jāpārliecinās, ka dokumentam nav beidzies derīguma termiņš. Sadaļā “Dokumentu paraugi” tiek attēloti tikai to valstu dokumentu paraugi, kuras to nodrošina.
    </div>
 

    <div class="row pt-3">
        <div class="col-md-6">
            
            <div>
            <label class="form-label">Valsts</label>
            <img src="../flags/de.png" class="flag"> Vācija
            </div>

            <div class="mt-3">
            <label class="form-label">Ārzemnieka personas kods</label>
            <input type="text" value="123456789" class="form-control">
            </div>
            
             <a type="submit" href="/auth/select-country.php" class="btn btn-outline-primary mt-3">Atpakaļ</a>

            <a type="submit" href="/auth/loading.php" class="btn btn-primary mt-3">Tālāk</a>

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
