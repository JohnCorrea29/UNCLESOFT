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
                          <input type="hidden" class="form-control" name="IDPago" id="IDPago" value="<?=$pago->__getIDPago()?>">
                        <div class="form-group">
                          <label>Cliente</label>
                          <input type="text" class="form-control" placeholder="Cliente" name="Cliente" id="Cliente" value="<?=$pago->__getCliente()?>">
                        </div>
                        <div class="form-group">
                          <label>Estado</label>
                          <input type="text" class="form-control" placeholder="Estado" name="Estado" id="Estado" value="<?=$pago->__getEstado()?>">
                        </div>  
                      </div>
                      <div class="col-md-3 px-md-1">
                        <div class="form-group">
                          <label>Fecha</label>
                          <input type="date" class="form-control" placeholder="Fecha"  name="Fecha" id="Fecha" value="<?=$pago->__getFecha()?>">
                        </div>
                      </div>
                      <div class="col-md-3 px-md-1">
                        <div class="form-group">
                          <label>Pago</label>
                          <input type="text" class="form-control" placeholder="Pago" name="Pago" id="Pago" value="<?=$pago->__getPago()?>">
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