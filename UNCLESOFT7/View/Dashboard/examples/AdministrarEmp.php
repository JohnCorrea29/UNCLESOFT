<?php
include_once("View/Dashboard/examples/Head.php");
include_once("View/Dashboard/examples/Nav.php");
?>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Adminstrar Empleado</h5>
              </div>
              <div class="card-body">
                <form method="POST" action="?c=Empleado&a=Guardar">
                  <div class="row">
                    <div class="col-md-3 pr-md-1">
                      <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" placeholder="Nombre" name="Nombre" id="Nombre" required>
                      </div>
                      
                        <input type="hidden" class="form-control"  name="Tipo_Usuario" id="Tipo_Usuario" value="2">

                      <div class="form-group">
                        <label>Tipo Documento</label>
                        <input type="text" class="form-control" placeholder="Tipo_Documento" name="Tipo_Documento" id="Tipo_Documento" required>
                      </div>
                      <div class="form-group">
                        <label>Correo</label>
                        <input type="email" class="form-control" placeholder="Correo" name="Correo" id="Correo" required>
                      </div>   
                    </div>
                    <div class="col-md-3 px-md-1">
                      <div class="form-group">
                        <label>Apellido</label>
                        <input type="text" class="form-control" placeholder="Apellido" name="Apellido" id="Apellido" required>
                      </div>
                      <div class="form-group">
                        <label>Password </label>
                        <input type="password" class="form-control" placeholder="Password" name="Password" id="Password" required>
                      </div>  
                      <div class="form-group">
                        <label>Fecha Nacimiento</label>
                        <input type="date" class="form-control" placeholder="Fecha_Nacimiento" name="Fecha_Nacimiento" id="Fecha_Nacimiento" required>
                      </div>
                    </div>
                    <div class="col-md-3 px-md-1">
                      <div class="form-group">
                        <label>Documento</label>
                        <input type="text" class="form-control" placeholder="Documento" name="Documento" id="Documento" required>
                      </div>
                      <div class="form_group">
                        <label>Dirección</label>
                        <input type="text" class="form-control"  placeholder="Direccion" name="Direccion" id="Direccion"Direccion>
                      </div>
                      <div class="form-group">
                        <label>Horario</label>
                        <input type="text" class="form-control" placeholder="Horario" name="Horario" id="Horario" required>
                      </div>  
                      <input type="hidden" class="form-control"  name="EstadoAct" id="EstadoAct" value="1" required>
                    </div>
                    <div class="col-md-3 pl-md-1">
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
                                    Correo
                                  </th>
                                  <th>
                                    Horario
                                  </th>
                                  <th>
                                    Rol
                                  </th>
                                  <th class="text-center">
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
                                      <?=$result->Nombre?>
                                    </td>
                                    <td>
                                      <?=$result->Apellido?>
                                    </td>
                                    <td>
                                      <?=$result->Documento?>
                                    </td>
                                    <td>
                                      <?=$result->Correo?>
                                    </td>
                                    <td>
                                      <?=$result->Horario==null ?"Null" :$result->Horario?>
                                    </td>
                                    <td>
                                      <?=$result->TipoUsu?>
                                    </td>
                                    <td class="text-center">
                                      <?=$result->EstadoAct?>
                                    </td>
                                    <td class="text-center">
                                      <a class="nav-link" href="#" data-toggle="modal" data-target="#staticBackdrop"><i class="tim-icons icon-chart-pie-36"></i></a>

                                      <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="staticBackdropLabel">Estado Usuario</h5>
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
                                              <button type="submit" class="btn btn-primary">Guardar</button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </td>
                                    <td class="text-center">
                                      <a class="nav-link" href="?c=Empleado&a=Obtener&id=<?=$result->IDUsuario?>"><i class="tim-icons icon-pencil"></i></a>
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
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php
include_once("View/Dashboard/examples/Footer.php");
?>