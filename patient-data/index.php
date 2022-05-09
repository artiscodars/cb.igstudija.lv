<?php
$section = "patient-data";
$subsection = "index";
$subsystem_title = "Pacienta dati";
include '../includes/header.php';
?>

 <div class="row g-0">

    <div class="col-xl-9 p-3">


        <?php include $_SERVER["DOCUMENT_ROOT"] . '/patient-data/menu.php'; ?>



        <div class="alert alert-danger" role="alert">
            A simple danger alert—check it out!
        </div>
        <div class="alert alert-warning" role="alert">
            A simple warning alert—check it out!
        </div>
        <div class="alert alert-info" role="alert">
            A simple warning alert—check it out!
        </div>


        <div class="row">

            <div class="col-md-6">

                <div class="section">
                    
                    <div class="row">
                        <div class="col-md"><h4><a href="page.php">Alerģijas un nepanesamības (4)</a></h4></div>
                        <div class="col-md-auto text-end">
                            <div class="input-group mb-2 minilist-search">
                            <input  class="form-control form-control-sm" type="text" ><button type="" class="btn btn-sm btn-link"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                    
                    
                    <?php include 'card-data-alergy.php'; ?>
                    <?php include 'card-data-alergy.php'; ?>
                    <?php include 'card-data-alergy.php'; ?>



                    <ul class="pagination justify-content-end">
                        <!--- use from 2nd page
                      <li class="page-item">
                        <a class="page-link"><i class="fas fa-chevron-left"></i></a>
                      </li>
                        --->
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul>



                </div>


                <div class="section">
                    <h4>Medicīniskās ierīces (0)</h4>
                    <?php include 'card-empty.php'; ?>
                </div>

                <div class="section">
                    <h4>Ķirurģiskās iejaukšanās (-)</h4>
                    <?php include 'card-empty.php'; ?>
                </div>



            </div>
            <div class="col-md-6">

                <div class="section">
                    
                    
                    <div class="row">
                        <div class="col-md"><h4><a href="page.php">Diagnozes (2)</a></h4></div>
                         <div class="col-md-auto text-end">
                            <div class="input-group mb-2 minilist-search">
                            <input  class="form-control form-control-sm" type="text" ><button type="" class="btn btn-sm btn-link"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                    
                    
                    <?php include 'card-data-diagnosis.php'; ?>
                    <?php include 'card-data-diagnosis.php'; ?>

                </div>

                <div class="section">
                    
                    <div class="row">
                        <div class="col-md"> <h4><a href="page.php">Zāļu kopsavilkums (1)</a></h4></div>
                         <div class="col-md-auto text-end">
                            <div class="input-group mb-2 minilist-search">
                            <input  class="form-control form-control-sm" type="text" ><button type="" class="btn btn-sm btn-link"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                    
                   
                    <?php include 'card-data-drugs.php'; ?>
                </div>


            </div>

        </div>



    </div>



    <div class="col p-3">
        <div class="sidebar">
            
             <?php include '../includes/patient-summary.php'; ?>

            <?php include '../includes/contactinfo.php'; ?>

           

        </div>
    </div>

</div>


<?php include '../includes/footer.php'; ?>
