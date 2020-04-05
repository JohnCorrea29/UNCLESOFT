<?php
include_once("View/Dashboard/examples/Head.php");
include_once("View/Dashboard/examples/Nav.php");
?>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Modificar Servicio</h5>
              </div>
              <div class="card-body">
                <form method="POST" action="?c=TipoServ&a=Guardar">
                <div class="row">
                    <div class="col-md-3 pr-md-1">
                    </div>
                    <div class="col-md-3 px-md-1">

                      <input type="hidden" class="form-control" name="ID_TipoServ" id="ID_TipoServ" value="<?=$serv->__getID_TipoServ()?>" required>
                    
                        <div class="form-group">
                            <label>Descripción</label>
                            <input type="text" class="form-control" placeholder="Descripción" name="Descripcion" id="Descripcion" value="<?=$serv->__getDescripcion()?>" required>  
                        </div> 

                    </div>
                    <div class="col-md-3 px-md-1">

                      <input type="hidden" class="form-control" name="EstadoAct" id="EstadoAct" value="<?=$serv->__getEstadoAct()?>" required>

                        <div class="form-group">
                            <label>Precio Estandar</label>
                            <input type="number" class="form-control" placeholder="100.000" name="Precio" id="Precio" value="<?=$serv->__getPrecio()?>" required>
                        </div> 
                    </div>
                    <div class="col-md-3 px-md-1">
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