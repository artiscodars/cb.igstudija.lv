<?php
$section = "edit";
include 'header.php'; ?>


      <div class="row g-0">

        <div class="col-12 col-md-8 p-3">


          <div class="card mb-3">
            <div class="card-body">

              <div class="row">

                <div class="col">

                      <label for="nosaukums" class="form-label">Nosaukums</label>
                      <input type="email" class="form-control" id="nosaukums" aria-describedby="nosaukums">

                </div>


              </div>

            </div>
          </div>


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



          <div class="card mb-3">
            <div class="card-body">

              <div class="row">

                <div class="col">

                    <h3 class="mb-3">Kolonnas</h3>

                  <table id="db_kolonnas" class="table table-hover table-cb" >
                          <thead>
                              <tr>
                                  <th class="w-50">Datu lauks</th>
                                  <th class="w-25">Funkcija</th>
                                  <th >Kolonnas nosaukums</th>
                                  <th ></th>
                              </tr>
                          </thead>
                          <tbody>

                            <!---  atkartojama gabala sakums --->
                              <tr>
                                  <td>
                                    <select class="form-select select2" aria-label="Default select example">
                                      <option selected>ServiceType</option>
                                      <option value="1">ServiceName ServiceNameService NameServiceName ServiceNameServiceName</option>
                                      <option value="2">ServiceData</option>
                                    </select>
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select example">
                                      <option selected>Mēnesis</option>
                                      <option value="1">Gads</option>
                                      <option value="2">Diena</option>
                                    </select>
                                  </td>
                                  <td><input type="email" class="form-control" id="nosaukums" aria-describedby="nosaukums"></td>
                                  <td><a href="#"><i class="far fa-trash-alt"></i></a></td>
                              </tr>
                            <!---  atkartojama gabala sakums END --->

                              <tr>
                                  <td>
                                    <select class="form-select select2" aria-label="Default select example">
                                      <option selected>ServiceType</option>
                                      <option value="1">ServiceName</option>
                                      <option value="2">ServiceData</option>
                                    </select>
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select example">
                                      <option selected>Mēnesis</option>
                                      <option value="1">Gads</option>
                                      <option value="2">Diena</option>
                                    </select>
                                  </td>
                                  <td><input type="email" class="form-control" id="nosaukums" aria-describedby="nosaukums"></td>
                                  <td><a href="#"><i class="far fa-trash-alt"></i></a></td>
                              </tr>
                              <tr>
                                  <td>
                                    <select class="form-select select2" aria-label="Default select example">
                                      <option selected>ServiceType</option>
                                      <option value="1">ServiceName</option>
                                      <option value="2">ServiceData</option>
                                    </select>
                                  </td>
                                  <td>
                                    <select class="form-select" aria-label="Default select example">
                                      <option selected>Mēnesis</option>
                                      <option value="1">Gads</option>
                                      <option value="2">Diena</option>
                                    </select>
                                  </td>
                                  <td><input type="email" class="form-control" id="nosaukums" aria-describedby="nosaukums"></td>
                                  <td><a href="#"><i class="far fa-trash-alt"></i></a></td>
                              </tr>

                            </table>

                              <button type="submit" class="btn btn-primary">Pievienot lauku</button>

                </div>


              </div>

            </div>
          </div>




          <div class="card mb-3">
            <div class="card-body">

              <div class="row">

                <div class="col">

                  <h3 class="mb-3">Filtri</h3>

                </div>


              </div>

            </div>
          </div>








        </div>

        <div class="col-12 col-md-4 p-3">

          <div class="card mb-3 ">
            <div class="card-body">

              <h3 class="mb-3">Pārskata izpilžu plānotājs</h3>

              <div class="mb-3">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                Aktīvs
                </label>
                </div>
              </div>


              <div class="row">
                <div class="col">
                  <label class="form-label">Laiks</label>
                  <input type="time" name="laiks" class="form-control">
                </div>
                <div class="col">
                  <label class="form-label">Datums</label>
                  <select class="form-select" aria-label="Default select example">
                    <option selected></option>
                    <option value="1">01</option>
                    <option value="2">02</option>
                  </select>
                </div>
                <div class="col">
                  <label class="form-label">Mēnesis</label>
                  <select class="form-select" aria-label="Default select example">
                    <option selected></option>
                    <option value="1">Jan</option>
                    <option value="2">Feb</option>
                  </select>
                </div>
                <div class="col">
                  <label class="form-label">Gads</label>
                  <select class="form-select" aria-label="Default select example">
                    <option selected></option>
                    <option value="1">2021</option>
                    <option value="2">....</option>
                  </select>
                </div>
                <div class="col">
                  <label class="form-label">Diena</label>
                  <select class="form-select" aria-label="Default select example">
                    <option selected></option>
                    <option value="1">Pirmdiena</option>
                    <option value="2">Otrdiena</option>
                  </select>
                </div>
              </div>



            </div>
          </div>





          <div class="card mb-3">
            <div class="card-body">

              <div class="row">

                <div class="col">

                  <h3 class="mb-3">Tabulas iestatījumi</h3>


                  <div class="mb-3">

                  <div class="row mb-3">
                    <div class="col-12 col-xl-6">
                      <label class="form-label">Kārtot pēc kolonnas</label>

                      <select class="form-select" aria-label="Default select example">
                        <option selected>Izvēlies kolonnu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>
                    <div class="col-12 col-xl-6">
                        <label class="form-label">Kārtošanas secība</label>
                      <select class="form-select" aria-label="Default select example">
                        <option selected>Izvēlies secību</option>
                        <option value="1">Augoši</option>
                        <option value="2">Dilstoši</option>

                      </select>
                  </div>
                  </div>
                </div>
                <div>
                  <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                  Šķērstabula
                  </label>
                  </div>
                </div>

                </div>


              </div>

            </div>
          </div>


          <div class="card mb-3 ">
            <div class="card-body">




                <h3 class="mb-3">Saglabātie pārskati</h3>

                <input id="searchInput" type="text" class="form-control mb-2" placeholder="Meklēšana">


                <table  id="saved-reports"  class="table table-hover table-cb dt-responsive nowrap" >
                        <thead>
                            <tr>
                                <th>Laiks</th>
                                <th>Ieraksti</th>
                                <th>Izveidoja</th>
                                <th style="width:30px"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                  2020-08-24011:38
                                </td>
                                <td>
                                  654
                                </td>
                                <td>Kārlis bērziņš</td>
                                <td><a href="#"><i class="far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                  2020-08-24011:38
                                </td>
                                <td>
                                  654
                                </td>
                                <td>Jānis bērziņš</td>
                                <td><a href="#"><i class="far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                  2020-08-24011:38
                                </td>
                                <td>
                                  654
                                </td>
                                <td>Jānis bērziņš</td>
                                <td><a href="#"><i class="far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                  2020-08-24011:38
                                </td>
                                <td>
                                  654
                                </td>
                                <td>Jānis bērziņš</td>
                                <td><a href="#"><i class="far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                  2020-08-24011:38
                                </td>
                                <td>
                                  654
                                </td>
                                <td>Jānis bērziņš</td>
                                <td><a href="#"><i class="far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                  2020-08-24011:38
                                </td>
                                <td>
                                  654
                                </td>
                                <td>Jānis bērziņš</td>
                                <td><a href="#"><i class="far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                  2020-08-24011:38
                                </td>
                                <td>
                                  654
                                </td>
                                <td>Jānis bērziņš</td>
                                <td><a href="#"><i class="far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                  2020-08-24011:38
                                </td>
                                <td>
                                  654
                                </td>
                                <td>Jānis bērziņš</td>
                                <td><a href="#"><i class="far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                  2020-08-24011:38
                                </td>
                                <td>
                                  654
                                </td>
                                <td>Jānis bērziņš</td>
                                <td><a href="#"><i class="far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                  2020-08-24011:38
                                </td>
                                <td>
                                  654
                                </td>
                                <td>Jānis bērziņš</td>
                                <td><a href="#"><i class="far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                  2020-08-24011:38
                                </td>
                                <td>
                                  654
                                </td>
                                <td>Jānis bērziņš</td>
                                <td><a href="#"><i class="far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                  2020-08-24011:38
                                </td>
                                <td>
                                  654
                                </td>
                                <td>Jānis bērziņš</td>
                                <td><a href="#"><i class="far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                  2020-08-24011:38
                                </td>
                                <td>
                                  654
                                </td>
                                <td>Jānis bērziņš</td>
                                <td><a href="#"><i class="far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                  2020-08-24011:38
                                </td>
                                <td>
                                  654
                                </td>
                                <td>Jānis bērziņš</td>
                                <td><a href="#"><i class="far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                  2020-08-24011:38
                                </td>
                                <td>
                                  654
                                </td>
                                <td>Jānis bērziņš</td>
                                <td><a href="#"><i class="far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                  2020-08-24011:38
                                </td>
                                <td>
                                  654
                                </td>
                                <td>Jānis bērziņš</td>
                                <td><a href="#"><i class="far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                  2020-08-24011:38
                                </td>
                                <td>
                                  654
                                </td>
                                <td>Jānis bērziņš</td>
                                <td><a href="#"><i class="far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td>
                                  2020-08-24011:38
                                </td>
                                <td>
                                  654
                                </td>
                                <td>Jānis bērziņš</td>
                                <td><a href="#"><i class="far fa-trash-alt"></i></a></td>
                            </tr>

                          </table>

            </div>
          </div>


        </div>

      </div>


  <?php include 'footer.php'; ?>
