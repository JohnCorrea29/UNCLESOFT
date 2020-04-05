<?php
include_once("View/Dashboard/examples/Head.php");
include_once("View/Dashboard/examples/Nav.php");
?>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Pedidos Asociados<button onclick="location.href='GestionarPed.php'" type="submit" class="btn btn-fill btn-primary float-right">Gestión Pedido</button></h5>
                
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
                                    Encargado
                                  </th>
                                  <th>
                                    Cliente
                                  </th>
                                  <th>
                                    Tipo_Servicio
                                  </th>
                                  <th>
                                    Tipo_Pedido
                                  </th>
                                  <th class="text-center">
                                    Producto
                                  </th>
                                  <th class="text-center">
                                    Precio
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
                                    Cambio Tapiz
                                  </td>
                                  <td>
                                    $36,738
                                  </td>
                                  <td class="text-center">
                                    <img src="https://1.bp.blogspot.com/-GhAdoM6-KsI/ULKZPRhYtqI/AAAAAAAAAOc/MVw3cZwuLbA/s1600/Mueble6.png" width="100" height="75">
                                  </td>
                                  <td class="text-center">
                                    $500.000
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    Santiago Vampi
                                  </td>
                                  <td>
                                    Huevo Hernadez
                                  </td>
                                  <td>
                                    Mantenimiento
                                  </td>
                                  <td>
                                    Ninguno
                                  </td>
                                  <td class="text-center">
                                    No muestra
                                  </td>
                                  <td class="text-center">
                                    $100.000
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