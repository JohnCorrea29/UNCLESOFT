<?php
include_once("View/Dashboard/examples/Head.php");
include_once("View/Dashboard/examples/Nav.php");
?>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Mi Cuenta</h5>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-md-3 pr-md-1">
                      <div class="form-group">
                        <label>Documento</label>
                        <input type="text" class="form-control" placeholder="Documento" value="" name="Documento" id="Documento">
                      </div>
                      <div class="form-group">
                        <label>Apellido</label>
                        <input type="text" class="form-control" placeholder="Apellido" id="Apellido" value="">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Rol</label>
                        <select class="form-control" id="TipoDoc" name="TipoDoc">
                          <option>Administrador</option>
                          <option>Empleado</option>
                        </select>
                      </div>   
                    </div>
                    <div class="col-md-3 px-md-1">
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Tipo Documento</label>
                        <select class="form-control" id="TipoDoc" name="TipoDoc">
                          <option>T.I</option>
                          <option>C.C</option>
                          <option>PASAPORTE</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Correo</label>
                        <input type="email" class="form-control" placeholder="Correo" value="">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Horario</label>
                        <select class="form-control" id="Horario" name="Horario">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-3 px-md-1">
                      <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" placeholder="Nombre" id="Nombre" value="">
                      </div>
                      <div class="form-group">
                        <label>Contraseña</label>
                        <input type="password" class="form-control"  value="">
                      </div>
                    </div>
                    <div class="col-md-3 pl-md-1">
                      <img class="mx-auto d-block" src="https://vignette.wikia.nocookie.net/halo/images/2/2d/John-117_H5G.png/revision/latest?cb=20150918014428&path-prefix=es" width="150" height="300">
                    </div>
                    <div class="col text-center">
                      <button type="submit" class="btn btn-fill btn-primary">Guardar</button>
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