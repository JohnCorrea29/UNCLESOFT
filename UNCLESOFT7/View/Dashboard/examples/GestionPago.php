<?php
include_once("View/Dashboard/examples/Head.php");
include_once("View/Dashboard/examples/Nav.php");
?>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Gestión Pago</h5>
              </div>
              <div class="card-body">
                <form method="POST" action="?c=pago&a=Guardar">
                  <div class="row">
                    <div class="col-md-3 pr-md-1">

                        <div class="form-group">
                          <label>Cliente</label>
                          <input type="text" class="form-control" placeholder="Cliente" name="Cliente" id="Cliente" requiered>  
                        </div>
                        <div class="form-group">
                          <label>Estado</label>
                          <input type="text" class="form-control" placeholder="Estado" name="Estado" id="Estado" requiered>
                        </div>  
                    </div>
                    <div class="col-md-3 pr-md-1">
                        <div class="form-group">
                          <label>Fecha</label>
                          <input type="date" class="form-control" placeholder="Fecha"  name="Fecha" id="Fecha" requiered>
                        </div>
                    </div>
                    <div class="col-md-3 pr-md-1">
                        <div class="form-group">
                          <label>Pago</label>
                          <input type="number" class="form-control" placeholder="Pago" name="Pago" id="Pago" requiered>
                        </div>
                    </div>
                    <div class="col-md-3 pr-md-1">
                        <img class="mx-auto d-block" src="https://vignette.wikia.nocookie.net/halo/images/2/2d/John-117_H5G.png/revision/latest?cb=20150918014428&path-prefix=es" width="150" height="300">
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
                                    Nombre
                                  </th>
                                  <th>
                                    Apellido
                                  </th>
                                  <th>
                                    Documento
                                  </th>
                                  <th>
                                    Pago
                                  </th>
                                  <th>
                                    Estado
                                  </th>
                                  <th class="text-center">
                                    PDF
                                  </th>
                                  <th class="text-center">
                                    Editar
                                  </th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php foreach($this->modelo->Listar() as $result): ?>
                                  <tr>
                                    <td>
                                      <?=$result->Nombre?>
                                    </td>
                                    <td>
                                      <?=$result->Apellido?>
                                    </td>
                                    <td>
                                      <?=$result->Documento?>
                                    </td>
                                    <td>
                                      <?=$result->Pago?>
                                    </td>
                                    <td>
                                      <?=$result->Descripcion?>
                                    </td>
                                    <td class="text-center">
                                      <a class="nav-link" href="#" ><i class="tim-icons icon-chart-pie-36"></i></a>
                                    </td>
                                    <td class="text-center">
                                      <a class="nav-link" href="?c=pago&a=Editar&id=<?=$result->IDPago?>" ><i class="tim-icons icon-chart-pie-36"></i></a>
                                    </td>
                                  </tr>
                                <?php endforeach;?>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Total Pagos</label>
                        <p>
                            <?php $r=$this->modelo->SumPagos()?>
                            <?=$r->PagosTotales?>
                        </p>
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