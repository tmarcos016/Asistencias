            <!-- Modal -->
            <div id="cambiopass" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Contenido del modal -->
             <div class="modal-content">
                  <div class="modal-header">
                  <!-- Titulo -->
                  <h5 class="modal-title" id="exampleModalLabel">Cambiar Contraseña</h5>
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- inputs text -->
                  <div class="modal-body">
                  <div class="form-group">
            <label for="newcontra" class="col-form-label">Nueva contraseña:</label>
            <input type="password" class="form-control" id="newcontra">
          </div>
          <div class="form-group">
            <label for="newcontra1" class="col-form-label">Repetir contraseña:</label>
            <input type="password" class="form-control" id="newcontra1"></input>
          </div>
                  </div>
                  <!-- Botones Modal-->
                  <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                   <button id="actualizar1" type="button" class="btn btn-dark">Actualizar contraseña</button>
                   <button id="generar1" type="button" class="btn btn-dark" onclick="Autopass1(8);">Generar contraseña</button>
                </div>
              </div>
             </div>
            </div>