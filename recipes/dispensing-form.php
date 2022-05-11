<div class="steps">
    <ul>
        <li>
            <a href="#" class="active"><span class="num">1</span><span class="name">Medikamenta izvēle</span></a>
        </li>
        <li>
            <a href="#" class=""><span class="num">2</span><span class="name">Priekšskatīt</span></a>
        </li>
         <li>
            <a href="#" class=""><span class="num">3</span><span class="name">Izsniegšana</span></a>
        </li>
    </ul>
</div>

<?php if($_GET['p']=='canceled'){ ?>

<div class="alert alert-danger alert-dismissible fade show" role="alert">
  Reģistrācija atcelta
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<?php } ?>

<div class="alert alert-info" role="alert">
    Lūdzu, izvēlieties receptē izrakstītajām zālēm atbilstošu medikamentu un ievadiet izsniedzamo zāļu iepakojumu daudzumu.
    <br><br>
    Jūs drīkstat izsniegt arī daļu no izrakstītā zāļu daudzuma. 
</div>

<div class="card mb-3">
    <div class="card-body">




        <form class="m-0">

            <label for="field-1" class="form-label">Izsniedzamie medikamenti</label> 
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <button class="btn btn-primary" >Izvēlēties</button>
            </div>


            <div class="row mb-3">
                <div class="col">
                    <label for="field-1" class="form-label">Iepakojumus skaits</label>
                    <input type="number" class="form-control" id="field-1" value="1">
                </div>
                <div class="col">
                    <label for="field-2" class="form-label">Kopējais izsniedzamais daudzums</label>
                    <input type="text" readonly class="form-control-plaintext" id="field-2" value="30">
                </div>
            </div>


            <div class="mb-2">
                <label for="field-1" class="form-label">Aizvietots</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Jā</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Nē</label>
                </div>

            </div>


            <div class="row mt-3">

                <div class="col">
                    <a type="submit" href="?p=review" class="btn btn-primary">Tālāk</a>
                </div>
                <div class="col-auto text-end">
                    <a type="submit"  href="/recipes/recipe.php" class="btn btn-outline-primary">Notīrīt</a>
                </div>
            </div>


        </form>






    </div>
</div>

<div class="accordion" id="ako-1">




    <div class="accordion-item">
        <h2 class="accordion-header" id="heading-patient">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#more" aria-expanded="false" aria-controls="more">
                <i class="fas fa-info-circle me-2"></i> PAPILDU INFORMĀCIJA
            </button>
        </h2>
        <div id="more" class="accordion-collapse collapse" aria-labelledby="heading-more" data-bs-parent="#ako-1">
            <div class="accordion-body">



                Lūdzu, ņemiet vērā, ka receptē norādītais zāļu nosaukums var nebūt atrodams Latvijas Zāļu reģistrā, tāpēc receptē ir iekļauts arī izrakstītajām zālēm atbilstošais ATĶ kods un nosaukums.
                <br><br>
                Ja receptē izrakstītās zāles nav atļauts aizvietot, tad nedrīkst izsniegt citas zāles!
                <br><br>
                Ja ārzemēs ir izrakstītas zāles, kuru iegādes izdevumus pacientam daļēji vai pilnībā kompensē no Vācija budžeta līdzekļiem, personai zāles Latvijā ir jāiegādājas par personīgajiem līdzekļiem. Izdevumu atmaksu persona var pieprasīt valstī, kurā ir izrakstīta attiecīgā recepte. 
                <br><br>
                Ārzemēs izrakstītajās receptēs netiek norādīta personas diagnoze. 




            </div>
        </div>
    </div>

</div>
