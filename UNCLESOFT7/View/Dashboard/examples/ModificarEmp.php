<?php
include_once("View/Dashboard/examples/Head.php");
include_once("View/Dashboard/examples/Nav.php");
?>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Modificar Empleado</h5>
              </div>
              <div class="card-body">
                <form method="POST" action="?c=empleado&a=Editar">
                  <div class="row">
                    <div class="col-md-3 pr-md-1">

                        <input type="hidden" class="form-control" name="IDUsuario" id="IDUsuario" value="<?=$usu->__getIDUsuario()?>">

                      <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" placeholder="Nombre" name="Nombre" id="Nombre" value="<?=$usu->__getNombre()?>" required>
                      </div>
                      <div class="form-group">
                        <label>Tipo Documento</label>
                        <input type="text" class="form-control" placeholder="Tipo_Documento" name="Tipo_Documento" id="Tipo_Documento" value="<?=$usu->__getTipoDocumento()?>" required>
                      </div>
                      <div class="form-group">
                        <label>Correo</label>
                        <input type="email" class="form-control" placeholder="Correo" name="Correo" id="Correo" value="<?=$usu->__getCorreo()?>" required>
                      </div>   
                    </div>
                    <div class="col-md-3 px-md-1">
                      <div class="form-group">
                        <label>Apellido</label>
                        <input type="text" class="form-control" placeholder="Apellido" name="Apellido" id="Apellido" value="<?=$usu->__getApellido()?>"required>
                      </div>
                      <div class="form-group">
                        <label>Password </label>
                        <input type="password" class="form-control" placeholder="Password" name="Password" id="Password" value="<?=$usu->__getPassword()?>" required>
                      </div>  
                      <div class="form-group">
                        <label>Fecha Nacimiento</label>
                        <input type="date" class="form-control" placeholder="Fecha_Nacimiento" name="Fecha_Nacimiento" id="Fecha_Nacimiento" value="<?=$usu->__getFecha_Nacimiento()?>" required>
                      </div>
                    </div>
                    <div class="col-md-3 px-md-1">
                      <div class="form-group">
                        <label>Documento</label>
                        <input type="text" class="form-control" placeholder="Documento" name="Documento" id="Documento" value="<?=$usu->__getDocumento()?>" required>
                      </div>
                      <div class="form_group">
                        <label>Dirección</label>
                        <input type="text" class="form-control"  placeholder="Direccion" name="Direccion" id="Direccion" value="<?=$usu->__getDireccion()?>" required>
                      </div>
                      <div class="form-group">
                        <label>Horario</label>
                        <input type="text" class="form-control" placeholder="Horario" name="Horario" id="Horario" value="<?=$usu->__getHorario()?>"required>
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