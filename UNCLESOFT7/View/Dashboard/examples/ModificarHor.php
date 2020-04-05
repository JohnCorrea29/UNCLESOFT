<?php
include_once("View/Dashboard/examples/Head.php");
include_once("View/Dashboard/examples/Nav.php");
?>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Modificar Horario</h5>
              </div>
              <div class="card-body">
                <form method="POST" action="?c=Horario&a=Guardar">
                  <div class="row">
                    <div class="col-md-3 pr-md-1">
                    </div>
                    <div class="col-md-6 px-md-1">
                       
                            <input type="hidden" class="form-control" name="IDHorario" id="IDHorario" value="<?=$hor->__getIDHorario()?>">

                        <div class="form-group">
                            <label>Descripción</label>
                            <input type="text" class="form-control" name="Descripcion" id="Descripcion"  value="<?=$hor->__getDescripcion()?>" required>
                        </div> 
                    </div>
                    <div class="col-md-3 px-md-1">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 pr-md-1">
                    </div>
                    <div class="col-md-3 px-md-1">
                            <input type="hidden" class="form-control" name="EstadoAct" id="EstadoAct" value="<?=$hor->__getEstadoAct()?>" required>
                        <div class="form-group">
                            <label>Hora Inicio</label>
                            <input type="time" class="form-control" name="Hora_Inicio" id="Hora_Inicio"  value="<?=$hor->__getHora_Inicio()?>" required>
                        </div> 
                    </div>
                    <div class="col-md-3 px-md-1">
                        <div class="form-group">
                            <label>Hora Final</label>
                            <input type="time" class="form-control" name="Hora_Finalizacion" id="Hora_Finalizacion"  value="<?=$hor->__getHora_Finalizacion()?>" required>
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