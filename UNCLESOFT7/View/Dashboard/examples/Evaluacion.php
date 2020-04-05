<?php
include_once("View/Dashboard/examples/Head.php");
include_once("View/Dashboard/examples/Nav.php");
?>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Evaluación</h5>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-md-3 pr-md-1">
                    </div>
                    <div class="col-md-6 px-md-1">
                        <img class="mx-auto d-block" src="https://image.flaticon.com/icons/png/512/1768/1768946.png" width="300" heigth="300">
                    </div>
                    <div class="col-md-3 px-md-1">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="card  card-plain">
                        <div class="card-header">
                          <div class="col-md-3">
                            <input type="text" class="form-control" placeholder="Buscar" id="Nombre" value="">
                          </div>
                        </div>
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table tablesorter " id="">
                              <thead class=" text-primary">
                                <tr>
                                  <th>
                                    Calificación
                                  </th>
                                  <th>
                                    Cliente
                                  </th>
                                  <th>
                                    Producto
                                  </th>
                                  <th class="text-center">
                                    Ver
                                  </th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    Estrellas
                                  </td>
                                  <td>
                                    Arturo Gomez
                                  </td>
                                  <td>
                                    Mueble Ambar
                                  </td>
                                  <td class="text-center">
                                    <a class="nav-link" href="#" data-toggle="modal" data-target="#staticBackdrop"><i class="tim-icons icon-chart-pie-36"></i></a>

                                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Nombre Cliente </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <img src="https://1.bp.blogspot.com/-GhAdoM6-KsI/ULKZPRhYtqI/AAAAAAAAAOc/MVw3cZwuLbA/s1600/Mueble6.png" width="100" height="100">
                                            <h5>Estrellas</h5>
                                            <form  method="post" action="">
                                              <div class="form-group">
                                                <label for="exampleFormControlSelect1">Estado</label>
                                                <input type="text" class="form-control" placeholder="label" value="Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae fugiat, quam cum magni quod quos et quasi iure! Nostrum distinctio facilis aliquid impedit fuga cupiditate quibusdam odio labore cum ratione.">
                                              </div>
                                            </form>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php
include_once("View/Dashboard/examples/Footer.php");
?>