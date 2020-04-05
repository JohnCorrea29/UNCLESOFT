<?php
include_once("View/Dashboard/examples/Head.php");
include_once("View/Dashboard/examples/Nav.php");
?>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Reportes</h5>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-md-3 pr-md-1">
                    </div>
                    <div class="col-md-3 px-md-1">
                    <div class="form-group">
                        <label>Reporte Ventas</label>
                    </div>
                    <button type="submit" class="btn btn-fill btn-primary">PDF VENTAS</button>
                    </div>
                    <div class="col-md-3 px-md-1">
                    <div class="form-group">
                        <label>Reporte Servicios</label>
                    </div>
                    <button type="submit" class="btn btn-fill btn-primary">PDF SERVICIOS</button>
                    </div>
                    <div class="col-md-3 px-md-1">
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