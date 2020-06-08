<!-- Contenido del Login -->
<div class="login-box" >
    <div class="login-box-body bordeLogin">
                <!-- Titulo de Login -->
        <p class="tituloLogin">Sistema Control de Accesos</p>
        <!-- labels e input para login -->
        <form action="verificar_login.php" method="post" id="frmLogin" style="border-color:#40739e">
            <div class="form-group has-feedback logoActivo">
                <label class="lblTitulo">Usuario:</label>
            <input type="usuario" id="loginUsuario" class="form-control" placeholder="Escribe el nombre de usuario" autofocus required>
            </div>
            <div class="form-group has-feedback">
                <label class="lblTitulo">Contraseña:</label>
            <input type="password" id="loginContra" class="form-control" placeholder="Escribe la contraseña" required>
            </div>
            <!-- Modal -->
            <div id="passmodal" class="modal fade" role="dialog">
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
            <label for="newpass" class="col-form-label">Nueva contraseña:</label>
            <input type="password" class="form-control" id="newpass">
          </div>
          <div class="form-group">
            <label for="newpass1" class="col-form-label">Repetir contraseña:</label>
            <input type="password" class="form-control" id="newpass1"></input>
          </div>
                  </div>
                  <!-- Botones Modal-->
                  <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                   <button id="actualizar" type="button" class="btn btn-dark">Actualizar contraseña</button>
                   <button id="generar" type="button" class="btn btn-dark" onclick="Autopass(8);">Generar contraseña</button>
                </div>
              </div>
             </div>
            </div>
            <!-- Cambio de contraseña toggle -->
            <input id="check" type="checkbox" value="0" onchange="" data-toggle="toggle" data-on="Si" data-off="No" data-onstyle="dark" data-offstyle="light"> Cambiar contraseña
                <!-- Boton de ingresar -->
                <div class="col text-center">
                    <button   type="submit" class="btn btn-outline-dark active" id="btnIngresar" disabled>
                        <i class="fas fa-lock" id="icoLogin"></i>
                        Ingresar al sistema
                    </button>
                </div>

        </form>
    </div>
</div>

