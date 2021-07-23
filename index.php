<?php
$subsystem_title = "Pacienta identifikācija";


include 'includes/header.php'; ?>

  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-4">



        <div class="card identification">
          <div class="card-body">

            <form>

              <div class="mb-3">
                <label class="form-label">Valsts</label>
                <select class="form-select" aria-label="">
                  <option selected>Izvēlies valsti</option>
                  <option value="1">Latvija</option>
                  <option value="2">Lietuva</option>
                  <option value="3">Igaunija</option>
                </select>
              </div>

              <div class="mb-3">
                <label for="id" class="form-label">Pacienta reģionālais/nacionālais veselības ID</label>
                <input type="text" class="form-control" id="id" aria-describedby="emailHelp">

              </div>
              <div class="mb-3">
                <label for="id2" class="form-label">Trešā puse (neobligāti)</label>
                <input type="text" class="form-control" id="id2">
              </div>

              <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-block">Identificēt</button>
              </div>
            </form>

          </div>
        </div>





        <div class="card pacients">

          <div class="card-body">

            <ul class="list-group list-group-flush mb-3">
              <li class="list-group-item">
                <label>Vārds:</label>Ingrid</li>
              <li class="list-group-item">
                <label>Uzvārds:</label>Vasserman</li>
              <li class="list-group-item">
                <label>Dzimums:</label>Sieviete</li>
              <li class="list-group-item">
                <label>Dzimšanas datums:</label>12.03.1997</li>
              <li class="list-group-item">
                <label>Iela:</label>Stralauer Platz 36, Friedrichshain-Kreuzberg
              </li>
              <li class="list-group-item">
                <label>Pasta indekss:</label>10243</li>
              <li class="list-group-item">
                <label>Pilsēta:</label>Berlin</li>


            </ul>

            <div class="p-3 mb-3">

              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="identificets">
                <label class="form-check-label" for="identificets">
                  Pacients ir identificēts un ir devis piekrišanu
                </label>
              </div>
            </div>

            <div class="d-grid gap-2">
              <a type="submit" href="/patient-data/" class="btn btn-primary btn-block">Pacienta pamatdati</a>
              <a type="submit" href="/recipes/" class="btn btn-primary btn-block">Receptes</a>
            </div>

          </div>
        </div>




      </div>
    </div>
  </div>

  <?php include 'includes/footer.php'; ?>
