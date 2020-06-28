<?php
// Conexion mysqli
include'../conexion/conexionli.php';

$fecha=date("Y-m-d");
//Variable de Nombre
$varGral="-CT";

$cadena = "SELECT
        id_tema,
        activo,
        nombre_tema,
        fecha_registro,
        hora_registro,
        TIMESTAMPDIFF(DAY,DATE_FORMAT(fecha_registro,'%Y-%m-%d'), '$fecha')
            FROM
                temas ORDER BY id_tema DESC";
$consultar = mysqli_query($conexionLi, $cadena);
//$row = mysqli_fetch_array($consultar);

?>
<div class="table-responsive">
<table id="example<?php echo $varGral;?>" class="table table-striped table-bordered" style="width:100%">

        <thead>
            <tr class='hTabla'>
                <th scope="col">#</th>
                <th scope="col">Editar</th>
                <th scope="col">Exportar Tema</th>
                <th scope="col">Aplicar Tema</th>
                <th scope="col">Nombre</th>
                <th scope="col">Dias Creacion</th>
                <th scope="col">Hora Creacion</th>
                <th scope="col">Status</th>
            </tr>
        </thead>

        <tbody>
        <?php
        // Recorro el arreglo y le asigno variables a cada valor del item
        $n=1;
        while( $row = mysqli_fetch_array($consultar) ) {

            $id          = $row[0];

            if ($row[1] == 1) {
                $chkChecado    = "checked";
                $dtnDesabilita = "";
                $chkValor      = "1";
            }else{
                $chkChecado    = "";
                $dtnDesabilita = "disabled";
                $chkValor      = "0";
            }

            $nombre     = $row[2];
            $dias       = $row[5];
            $hora       = $row[4];
            ?>
            <tr class="centrar">
                <th scope="row" class="textoBase">
                    <?php echo $n?>
                </th>
                <td>
                    <button <?php echo $dtnDesabilita?> type="button" class="editar btn btn-outline-success btn-sm activo" id="btnEditar<?php echo $varGral?><?php echo $n?>" onclick="llenar_formulario_CT('<?php echo $id?>','<?php echo $nombre?>')">
                                <i class="far fa-edit fa-lg"></i>
                    </button>
                </td>
                <td>
                    <button <?php echo $dtnDesabilita?> type="button" class="exportar btn btn-outline-warning btn-sm activo" id="btnExportar<?php echo $varGral?><?php echo $n?>" onclick="llenar_formulario_CT('<?php echo $id?>','<?php echo $desc?>')">
                                <i class="fas fa-file-export fa-lg"></i>
                    </button>
                </td>
                <td>
                    <button <?php echo $dtnDesabilita?> type="button" class="aplicar btn btn-outline-info btn-sm activo" id="btnAplicar<?php echo $varGral?><?php echo $n?>" onclick="llenar_formulario_CT('<?php echo $id?>','<?php echo $desc?>')">
                                <i class="fas fa-window-restore fa-lg"></i>
                    </button>
                </td>
                <td>
                    <label class="textoBase">
                        <?php echo $nombre ?>
                    </label>
                </td>
                <td>
                    <label class="textoBase">
                        <?php echo $dias ?>
                    </label>
                </td>
                <td>
                    <label class="textoBase">
                        <?php echo $hora ?>
                    </label>
                </td>

                <td>
                    <input value="<?php echo $chkValor?>" onchange="cambiar_estatus_CT(<?php echo $id?>,<?php echo $n?>)" class="toggle-two" type="checkbox" <?php echo $chkChecado?> data-toggle="toggle" data-onstyle="outline-success" data-width="60" data-size="sm" data-offstyle="outline-danger" data-on="<i class='fa fa-check'></i> Si" data-off="<i class='fa fa-times'></i> No" id="check<?php echo $n?>">
                </td>
            </tr>
        <?php
        $n++;
        }
        ?>

        </tbody>
        <tfoot>
            <tr class='hTabla'>
            <th scope="col">#</th>
                <th scope="col">Editar</th>
                <th scope="col">Exportar Tema</th>
                <th scope="col">Aplicar Tema</th>
                <th scope="col">Nombre</th>
                <th scope="col">Dias Creacion</th>
                <th scope="col">Hora Creacion</th>
                <th scope="col">Status</th>
            </tr>
        </tfoot>
    </table>
<div>

<?php
//En caso de error imprime
print_r(mysqli_error($conexionLi));
//Cierro la conexionLi
mysqli_close($conexionLi);
?>

<script type="text/javascript">
  var varGral='<?php echo $varGral?>';
  $(document).ready(function() {
        $('#example'+varGral).DataTable( {
            "language": {
                    // "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
                    "url": "../plugins/dataTablesB4/langauge/Spanish.json"
                },
            "order": [[ 0, "asc" ]],
            "paging":   true,
            "ordering": true,
            "info":     true,
            "responsive": true,
            "searching": true,
            stateSave: true,
            dom: 'Bfrtip',
            lengthMenu: [
                [ 10, 25, 50, -1 ],
                [ '10 Registros', '25 Registros', '50 Registros', 'Todos' ],
            ],
            columnDefs: [ {
                // targets: 0,
                // visible: false
            }],
            buttons: [
                      {
                          text: "<i class='fas fa-plus fa-lg' aria-hidden='true'></i> &nbsp;Nuevo Registro",
                          className: 'btn btn-outline-primary btnEspacio',
                          id: 'btnNuevo',
                          action : function(){
                            nuevo_registro_CT();
                          }
                      },
                      {
                          text: "<i class='fas fa-file-import fa-lg' aria-hidden='true'></i> &nbsp;Importar Tema",
                          className: 'btn btn-outline-primary btnEspacio',
                          id: 'btnImportar',
                          action : function(){
                            abrirModalImportar();
                          }
                      },
                      {
                          extend: 'excel',
                          text: "<i class='far fa-file-excel fa-lg' aria-hidden='true'></i> &nbsp;Exportar a Excel",
                          className: 'btn btn-outline-secondary btnEspacio',
                          title:'Lista_crear_temas',
                          id: 'btnExportar',
                          exportOptions: {
                            columns:  [6,7,8,9,10],
                          }
                        }
            ]
        } );
    } );

</script>

<script>
    $('.toggle-two').bootstrapToggle();
</script>