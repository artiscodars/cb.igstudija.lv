<?php
$subsystem_title = "Pacienta identifikācija";


include 'includes/header.php'; ?>

  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-4">



          <h2 class="mt-3">Autorizācija</h2>
          
          <ul class="list-group mb-3">
           <li class="list-group-item">
                <a href="/auth/select-country.php" class="active">Valsts izvēle</a>
            </li>
            <li class="list-group-item">
                <a href="/auth/identify-person.php">Personas identifikācija</a>
            </li>
            <li class="list-group-item">
                <a href="/auth/data-validation.php">Datu pārbaude</a>
            </li>
            <li class="list-group-item">
                <a href="/auth/loading.php">Ielāde</a>
            </li>
        </ul>
          
          
           <h2>Pacienta dati</h2>
           
           <ul class="list-group mb-3">
           <li class="list-group-item">
                <a href="/patient-data/index.php" class="active">Sākums</a>
            </li>
            <li class="list-group-item">
                <a href="/patient-data/page.php">Sadaļa</a>
            </li>
           
        </ul>
           
           
            <h2>Receptes</h2>
            
            
            <ul class="list-group mb-3">
           <li class="list-group-item">
                <a href="/recipes/index.php" class="active">Sākums</a>
            </li>
            <li class="list-group-item">
                <a href="/recipes/recipe.php">Recepte / Medikemneta izvēle</a>
            </li>
            <li class="list-group-item">
                <a href="/recipes/recipe.php?p=review">Recepte / Priekškatīšana</a>
            </li>
            <li class="list-group-item">
                <a href="/recipes/recipe.php?p=validate">Recepte / Ielāde</a>
            </li>
            
            <li class="list-group-item">
                <a href="/recipes/recipe-dispensing-cancel.php">Atcelšanas reģistrācija</a>
            </li>
            
             <li class="list-group-item">
                <a href="/recipes/recipe.php?p=canceled">Recepte / Atcelta</a>
            </li>
            
             <li class="list-group-item">
                <a href="/recipes/recipe-summary.php">Izsniegšana / Kopsavilkums</a>
            </li>
            
            <li class="list-group-item">
                <a href="/recipes/recipe-dispensing-final.php">Izsniegšana / Izsniegt</a>
            </li>
        </ul>




      </div>
    </div>
  </div>

  <?php include 'includes/footer.php'; ?>
