<?php
$section = "view";
include 'header.php'; ?>









            <div class="row g-0">

              <div class="col p-3">




                    <table id="dati" class="table table-hover table-cb" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Nosaukums</th>
                                    <th>Skaits</th>
                                    <th>Datums</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                              </tbody>
                          </table>














              </div>

              <div class="col-3 p-3">




                <div class="card mb-3">
                  <div class="card-body">

                    <div class="row">

                      <div class="col">




                        <h3>Datu avots</h3>
                        <div class="row ">
                          <div class="col">
                            <i class="fas fa-database"></i> Automātiskais datu kolektors <i class="bi bi-arrow-right"></i> <i class="bi bi-table"></i> Pacienti

                          </div>

                        </div>


                      </div>


                    </div>

                  </div>
                </div>



                <div class="card mb-3 ">
                  <div class="card-body">

                    <h3 class="mb-3">Pārskata izpildes</h3>

                    <a href="edit.php" class="btn btn-outline-warning"><i class="fas fa-edit"></i> Izpildīt pārskatu</a>



                  </div>
                </div>








                <div class="card mb-3 saved-reports">
                  <div class="card-body">
                      <h3 class="mb-3">Saglabātie pārskati</h3>
                      <table  id="saved-reports-2"  class="table table-hover table-cb" >
                              <thead>
                                  <tr>
                                      <th>Laiks</th>
                                      <th>Ieraksti</th>
                                      <th>Izveidoja</th>

                                  </tr>
                              </thead>
                              <tbody>
                                <tr>
                                    <td>
                                      <a href="#">2020-08-24011:38</a>
                                    </td>
                                    <td>
                                      654
                                    </td>
                                    <td>Jānis bērziņš</td>

                                </tr>
                                <tr>
                                    <td>
                                      <a href="#">2020-08-24011:38</a>
                                    </td>
                                    <td>
                                      654
                                    </td>
                                    <td>Jānis bērziņš</td>

                                </tr>


                              </tbody>
                            </table>

                  </div>
                </div>


              </div>

            </div>



  <?php include 'footer.php'; ?>
