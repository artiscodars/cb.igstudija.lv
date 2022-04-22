<?php
$subsystem_title = "Personas identifikācija";
$class = 'auth';
include '../includes/header.php';
?>

<div class="container">


    <div class="steps">
        <ul>
            <li>
                <a href="/auth/select-country.php" class="active"><span class="num">1</span><span class="name">Valsts izvēle</span></a>
            </li>
            <li>
                <a href="/auth/select-country.php"><span class="num">2</span><span class="name">Personas identifikācija</span></a>
            </li>
            <li>
                <a href="/auth/select-country.php"><span class="num">3</span><span class="name">Datu pārbaude</span></a>
            </li>
        </ul>
    </div>


    <div class="alert alert-info" role="alert">
        Lūdzu, izvēlaties valsti, no kuras vēlaties saņemt personas veselības pamatdatus. 
    </div>
 

    <div class="row pt-3">
        <div class="col-md-6">

            <label class="form-label">Valsts</label>
            <select class="form-select" aria-label="">
                <option selected>Izvēlies valsti</option>
                <option value="1">Latvija</option>
                <option value="2">Lietuva</option>
                <option value="3">Igaunija</option>
            </select>

            <a type="submit" href="/auth/identify-person.php" class="btn btn-primary mt-3">Tālāk</a>

        </div>


        <div class="col left-border pt-3 pb-3">
            Ārzemnieku veselības datu informācijas sistēma sniedz iespēju apskatīt ārzemnieku veselības pamatdatus, kā arī apskatīt un atprečot ārzemnieku e-receptes, tādējādi uzlabojot un paātrinot ārvalstu pacientu ārstēšanu Latvijā. To nodrošina informācijas apmaiņa ar citu valstu e-veselības sistēmām. Jāņem vērā, ka šos datus Latvijā nav iespējams labot vai papildināt. 

            Lai izietu no ārzemnieku veselības datu informācijas sistēmas, jānospiež augšējā joslā redzamā poga “Beigt darbu”. Pēc šīs darbības Jūs varēsiet turpināt darbu Latvijas E-veselības sistēmas portālā.
        </div>

    </div>
</div>
</div>

<?php include '../includes/footer.php'; ?>
