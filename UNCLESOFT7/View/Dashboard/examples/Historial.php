<?php
include_once("View/Dashboard/examples/Head.php");
include_once("View/Dashboard/examples/Nav.php");
?>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Historial</h5>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-md-3 pr-md-1">
                    </div>
                    <div class="col-md-6 px-md-1">
                    <img class="mx-auto d-block" src="https://vignette.wikia.nocookie.net/halo/images/2/2d/John-117_H5G.png/revision/latest?cb=20150918014428&path-prefix=es" width="250" height="350">
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
                                    Encargado
                                  </th>
                                  <th>
                                    Cliente
                                  </th>
                                  <th>
                                    Producto
                                  </th>
                                  <th>
                                    Nombre Producto
                                  </th>
                                  <th class="text-center">
                                    Seguimiento
                                  </th>
                                  <th class="text-center">
                                    Detalle
                                  </th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    Dakota Rice
                                  </td>
                                  <td>
                                    Any Fuente
                                  </td>
                                  <td>
                                   <img src="https://1.bp.blogspot.com/-GhAdoM6-KsI/ULKZPRhYtqI/AAAAAAAAAOc/MVw3cZwuLbA/s1600/Mueble6.png" width="100" height="75">
                                  </td>
                                  <td>
                                    Mueble Stunt
                                  </td>
                                  <td class="text-center">
                                    Entregado
                                  </td>
                                  <td class="text-center">
                                    Ver Detalle
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Dakota Rice
                                  </td>
                                  <td>
                                    Santiago Arroyave
                                  </td>
                                  <td>
                                   Reparación 
                                  </td>
                                  <td>
                                    No Aplica
                                  </td>
                                  <td class="text-center">
                                    En Proceso
                                  </td>
                                  <td class="text-center">
                                    Ver Detalle
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