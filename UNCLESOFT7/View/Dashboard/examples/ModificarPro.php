<?php
include_once("View/Dashboard/examples/Head.php");
include_once("View/Dashboard/examples/Nav.php");
?>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Modificar Producto</h5>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-md-3 pr-md-1">
                      <div class="form-group">
                        <label>Foto</label>
                        <input type="text" class="form-control" placeholder="Documento" value="" name="Documento" id="Documento">
                      </div>
                      <div class="form-group">
                        <label>Cantidad</label>
                        <input type="text" class="form-control" placeholder="Apellido" id="Apellido" value="">
                      </div> 
                      <div class="form-group">
                        <label>Color</label>
                        <input type="text" class="form-control" placeholder="Documento" value="" name="Documento" id="Documento">
                      </div>
                      <div class="form-group">
                        <label>Material</label>
                        <input type="text" class="form-control" placeholder="Documento" value="" name="Documento" id="Documento">
                      </div>
                    </div>
                    <div class="col-md-3 px-md-1">
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Especificación</label>
                        <select class="form-control" id="TipoDoc" name="TipoDoc">
                          <option>1</option>
                          <option>2</option>
                        </select>
                      </div>
                      <div class="form-group">
                      <label>Precio</label>
                        <input type="text" class="form-control" placeholder="Apellido" id="Apellido" value="">
                      </div>
                      <div class="form-group">
                        <label>Ancho</label>
                        <input type="text" class="form-control" placeholder="Documento" value="" name="Documento" id="Documento">
                      </div>
                    </div>
                    <div class="col-md-3 px-md-1">
                      <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" placeholder="Nombre" id="Nombre" value="">
                      </div>
                      <div class="form-group">
                        <label>Descripción</label>
                        <input type="email" class="form-control" placeholder="Correo" value="">
                      </div>
                      <div class="form-group">
                        <label>Alto</label>
                        <input type="text" class="form-control" placeholder="Documento" value="" name="Documento" id="Documento">
                      </div>
                    </div>
                    <div class="col-md-3 pl-md-1">
                        <img src="https://1.bp.blogspot.com/-GhAdoM6-KsI/ULKZPRhYtqI/AAAAAAAAAOc/MVw3cZwuLbA/s1600/Mueble6.png">
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