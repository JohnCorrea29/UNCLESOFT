<?php
include_once("View/Dashboard/examples/Head.php");
include_once("View/Dashboard/examples/Nav.php");
?>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Administrar Horario</h5>
              </div>
              <div class="card-body">
                <form method="POST" action="?c=Horario&a=Guardar">
                  <div class="row">
                    <div class="col-md-3 pr-md-1">
                    </div>
                    <div class="col-md-6 px-md-1">
                        <div class="form-group">
                            <label>Descripción</label>
                            <input type="text" class="form-control" placeholder="Descripción" name="Descripcion" id="Descripcion" required>
                        </div> 
                    </div>
                    <div class="col-md-3 px-md-1">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 pr-md-1">
                    </div>
                    <div class="col-md-3 px-md-1">
                        <div class="form-group">
                            <label>Hora Inicio</label>
                            <input type="time" class="form-control" placeholder="Hora Inicio" name="Hora_Inicio" id="Hora_Inicio" required>
                        </div> 
                    </div>
                    <div class="col-md-3 px-md-1">
                        <div class="form-group">
                            <label>Hora Final</label>
                            <input type="time" class="form-control" placeholder="Hora Final" name="Hora_Finalizacion" id="Hora_Finalizacion" required>
                        </div> 

                        <input type="hidden" class="form-control" name="EstadoAct" id="EstadoAct" value="1">

                    </div>
                    <div class="col-md-3 px-md-1">
                    </div>
                    <div class="col text-center">
                      <button type="submit" class="btn btn-fill btn-primary">Guardar</button>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="card  card-plain">
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table tablesorter " id="">
                              <thead class=" text-primary">
                                <tr>
                                  <th>
                                    Descripción
                                  </th>
                                  <th>
                                    Hora Inicio
                                  </th>
                                  <th>
                                    Hora Final
                                  </th>
                                  <th>
                                    Estado
                                  </th>
                                  <th class="text-center">
                                    Actualizar Estado
                                  </th>
                                  <th class="text-center">
                                    Modificar
                                  </th>
                                </tr>
                              </thead>
                              <tbody>
                                  <?php foreach($this->modelo->Listar() as $result): ?>
                                    <tr>
                                      <td>
                                        <?=$result->Descripcion?>
                                      </td>
                                      <td>
                                        <?=$result->Hora_Inicio?>
                                      </td>
                                      <td>
                                        <?=$result->Hora_Finalizacion?>
                                      </td>
                                      <td>
                                        <?=$result->EstadoAct==1 ? "Activo" : "Inactivo"?>
                                      </td>
                                      <td class="text-center">
                                        <a class="nav-link" href="#" data-toggle="modal" data-target="#staticBackdrop"><i class="tim-icons icon-chart-pie-36"></i></a>

                                        <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Estado Horario</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                              <div class="modal-body">
                                                <img src="https://image.flaticon.com/icons/png/512/1768/1768946.png" width="100" height="100">
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
                                        <a class="nav-link" href="?c=horario&a=Editar&id=<?=$result->IDHorario?>"><i class="tim-icons icon-pencil"></i></a>
                                      </td>
                                    </tr>
                                  <?php endforeach; ?>
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