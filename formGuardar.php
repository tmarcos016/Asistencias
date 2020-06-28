<?php
//Variable de Nombre
$varGral="-CT";
?>
<form id="frmGuardar<?php echo $varGral?>">
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-4">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="search" class="form-control" id="nombre"   autofocus required >
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-2">
            <div class="form-group">
                <label for="fuente">Color Fuente:</label>
                <input type="search" class="form-control" id="fuente"   autofocus required >
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-2">
            <div class="form-group">
                <label for="base">Color Base:</label>
                <input type="search" class="form-control" id="base"   autofocus required >
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-2">
            <div class="form-group">
                <label for="bfuerte">Color Base Fuerte:</label>
                <input type="search" class="form-control" id="bfuerte"   autofocus required >
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-2">
            <div class="form-group">
                <label for="borde">Color Borde:</label>
                <input type="search" class="form-control" id="borde"   autofocus required >
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col text-left">
                    <button  type="button" class="btn btn-outline-danger  activo btnEspacio" id="btnCancelarG<?php echo $varGral?>">
                        <i class='fa fa-ban fa-lg'></i>
                        Cancelar
                    </button>
                </div>
                 
                <div class="col text-center">
                    <button  type="button" class="btn btn-outline-warning  activo btnEspacio" id="btnProbar<?php echo $varGral?>">
                        <i class='fas fa-history'></i>
                        Probar
                    </button>
                </div>

                <div class="col text-right">
                    <button  type="submit" class="btn btn-outline-primary  activo btnEspacio" id="btnGuardar<?php echo $varGral?>">
                        <i class='fa fa-save fa-lg'></i>
                        Guardar
                    </button>
                </div>
            </div>
        </div>

    </div>

</form>