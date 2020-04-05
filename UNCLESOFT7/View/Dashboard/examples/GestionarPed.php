<?php
include_once("View/Dashboard/examples/Head.php");
include_once("View/Dashboard/examples/Nav.php");
?>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Gestión Pedido<button onclick="location.href='PedidosAsoc.php'" type="submit" class="btn btn-fill btn-primary float-right">Pedidos Asociados</button></h5>
                
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-md-3 pr-md-1">
                    </div>
                    <div class="col-md-6 px-md-1">
                    <img class="mx-auto d-block" src="https://vignette.wikia.nocookie.net/halo/images/2/2d/John-117_H5G.png/revision/latest?cb=20150918014428&path-prefix=es" width="150" height="300">
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
                                    Name
                                  </th>
                                  <th>
                                    Country
                                  </th>
                                  <th>
                                    City
                                  </th>
                                  <th>
                                    Salary
                                  </th>
                                  <th class="text-center">
                                    PDF
                                  </th>
                                  <th class="text-center">
                                    Asociar Pedido
                                  </th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    Dakota Rice
                                  </td>
                                  <td>
                                    Niger
                                  </td>
                                  <td>
                                    Oud-Turnhout
                                  </td>
                                  <td>
                                    $36,738
                                  </td>
                                  <td class="text-center">
                                    <a class="nav-link" href="#" ><i class="tim-icons icon-chart-pie-36"></i></a>
                                  </td>
                                  <td class="text-center">
                                    <a class="nav-link" href="#" data-toggle="modal" data-target="#staticBackdrop"><i class="tim-icons icon-chart-pie-36"></i></a>
                                      <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="staticBackdropLabel">Asignar Empleado</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                              <img src="https://image.flaticon.com/icons/png/512/1768/1768946.png" width="100" height="100">
                                              <form  method="post" action="">
                                                <div class="card-header">
                                                  <div class="col-md-5">
                                                    <input type="text" class="form-control" placeholder="Buscar Empleado" id="Nombre" value=""><br>
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                  <select class="form-control" id="Estado" name="Estado">
                                                    <option>Arturo Muñoz</option>
                                                    <option>Kevin XXX</option>
                                                  </select>
                                                </div>
                                              </form>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Dakota Rice
                                  </td>
                                  <td>
                                    Niger
                                  </td>
                                  <td>
                                    Oud-Turnhout
                                  </td>
                                  <td>
                                    $36,738
                                  </td>
                                  <td class="text-center">
                                    <i class="tim-icons icon-chart-pie-36"></i>
                                  </td>
                                  <td class="text-center">
                                    <i class="tim-icons icon-chart-pie-36"></i>
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