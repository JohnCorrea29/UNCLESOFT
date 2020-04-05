<?php
include_once("View/Dashboard/examples/Head.php");
include_once("View/Dashboard/examples/Nav.php");
?>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Administrar Productos</h5>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-md-3 pr-md-1">
                      <div class="form-group">
                        <label>Foto</label>
                        <input type="text" class="form-control" placeholder="Foto" value="" name="Documento" id="Documento">
                      </div>
                      <div class="form-group">
                        <label>Cantidad</label>
                        <input type="text" class="form-control" placeholder="Cantidad" id="Apellido" value="">
                      </div> 
                      <div class="form-group">
                        <label>Color</label>
                        <input type="text" class="form-control" placeholder="Color" value="" name="Documento" id="Documento">
                      </div>
                      <div class="form-group">
                        <label>Material</label>
                        <input type="text" class="form-control" placeholder="Material" value="" name="Documento" id="Documento">
                      </div>
                    </div>
                    <div class="col-md-3 px-md-1">
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Especificación</label>
                        <select class="form-control" id="TipoDoc" name="TipoDoc">
                          <option>1</option>
                          <option>2</option>
                        </select>
                      </div>
                      <div class="form-group">
                      <label>Precio</label>
                        <input type="text" class="form-control" placeholder="Precio" id="Apellido" value="">
                      </div>
                      <div class="form-group">
                        <label>Ancho</label>
                        <input type="text" class="form-control" placeholder="Ancho" value="" name="Documento" id="Documento">
                      </div>
                      <div class="form-group">
                        <label>Descuento</label>
                        <input type="text" class="form-control" placeholder="Descuento" value="20%" name="Documento" id="Documento">
                      </div>
                    </div>
                    <div class="col-md-3 px-md-1">
                      <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" placeholder="Nombre" id="Nombre" value="">
                      </div>
                      <div class="form-group">
                        <label>Descripción</label>
                        <input type="email" class="form-control" placeholder="Descripción" value="">
                      </div>
                      <div class="form-group">
                        <label>Alto</label>
                        <input type="text" class="form-control" placeholder="Alto" value="" name="Documento" id="Documento">
                      </div>
                    </div>
                    <div class="col-md-3 pl-md-1">
                        <img class="mx-auto d-block" src="https://1.bp.blogspot.com/-GhAdoM6-KsI/ULKZPRhYtqI/AAAAAAAAAOc/MVw3cZwuLbA/s1600/Mueble6.png">
                    </div>
                    <div class="col text-center">
                      <button type="submit" class="btn btn-fill btn-primary">Guardar</button>
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
                                    Estado
                                  </th>
                                  <th class="text-center">
                                    Modificar
                                  </th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                  <img src="https://1.bp.blogspot.com/-GhAdoM6-KsI/ULKZPRhYtqI/AAAAAAAAAOc/MVw3cZwuLbA/s1600/Mueble6.png" width="100" height="75">
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
                                    <a class="nav-link" href="#" data-toggle="modal" data-target="#staticBackdrop"><i class="tim-icons icon-chart-pie-36"></i></a>

                                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Estado Producto</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            <img src="https://1.bp.blogspot.com/-GhAdoM6-KsI/ULKZPRhYtqI/AAAAAAAAAOc/MVw3cZwuLbA/s1600/Mueble6.png" width="100" height="100">
                                            <form  method="post" action="">
                                              <div class="form-group">
                                                <label for="exampleFormControlSelect1">Estado</label>
                                                <select class="form-control" id="Estado" name="Estado">
                                                  <option>Activo</option>
                                                  <option>Inactivo</option>
                                                </select>
                                              </div>
                                            </form>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-primary">Guardar</button>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </td>
                                  <td class="text-center">
                                    <a class="nav-link" href="ModificarPro.php" ><i class="tim-icons icon-pencil"></i></a>
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
                                    <i class="tim-icons icon-pencil"></i>
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