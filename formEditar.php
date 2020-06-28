<?php
//Variable de Nombre
$varGral="-CT";
?>
<form id="frmActualizar<?php echo $varGral?>">

<input type="hidden"  id="eIdFC">

    <div class="row">

    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-4">
            <div class="form-group">
                <label for="enombre">Nombre:</label>
                <input type="search" class="form-control" id="enombre"   autofocus required >
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-2">
            <div class="form-group">
                <label for="efuente">Color Fuente:</label>
                <input type="search" class="form-control" id="efuente"   autofocus required >
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-2">
            <div class="form-group">
                <label for="ebase">Color Base:</label>
                <input type="search" class="form-control" id="ebase"   autofocus required >
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-2">
            <div class="form-group">
                <label for="ebfuerte">Color Base Fuerte:</label>
                <input type="search" class="form-control" id="ebfuerte"   autofocus required >
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-2">
            <div class="form-group">
                <label for="eborde">Color Borde:</label>
                <input type="search" class="form-control" id="eborde"   autofocus required >
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col text-left">
                    <button  type="button" class="btn btn-outline-danger  activo btnEspacio" id="btnCancelarA<?php echo $varGral?>">
                        <i class='fa fa-ban fa-lg'></i>
                        Cancelar
                    </button>
                </div>
                <div class="col text-center">
                    <button  type="button" class="btn btn-outline-warning  activo btnEspacio" id="btnProbarA<?php echo $varGral?>">
                        <i class='fas fa-history fa-lg'></i>
                        Probar
                    </button>
                </div>
                <div class="col text-right">
                    <button  type="submit" class="btn btn-outline-success  activo btnEspacio" id="btnActualizar<?php echo $varGral?>">
                        <i class='fa fa-bolt fa-lg'></i>
                        Actualizar
                    </button>
                </div>
            </div>
        </div>

    </div>

</form>