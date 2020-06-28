//VARIABLE GLOBAL PARA NOMBRAR LOS ELEMENTOS DE LOS  FORMULARIOS
//Crear Tema-CT 
var nombreModulo_CT="Crear Tema";

$("#frmGuardar-CT").submit(function(e){

    var nombre   = $("#nombre").val();


    swal({
        title: "¿Estas Seguro?",
        text: "¿Deseas Guardar la información?",
        type: "info",
        showCancelButton: true,
        confirmButtonClass: "btn-primary",
        confirmButtonText: "Si deseo guardarla",
        cancelButtonText: "Cancelar Acción",
        cancelButtonClass: "btn-outline-danger",
        closeOnConfirm: false,
        closeOnCancel: true,
        showLoaderOnConfirm: true
      }, function (isConfirm) {
        if (isConfirm) {
        setTimeout(function () {
            swal.close();
            $.ajax({
                url:"../mCrearTema/guardar.php",
                type:"POST",
                dateType:"html",
                data:{desc},
                success:function(respuesta){
                    console.log(respuesta);
                    $("#guardar-CT").hide();
                    llenar_lista_CT();
                    $("#frmGuardar-CT")[0].reset();
                    selectTwo();
                    alertify.success("<i class='fa fa-save fa-lg'></i>", 2);
                    $('#desc').focus();
                    actividad  ="Se insertado un nuevo registro a la tabla "+nombreModulo_CT;
                    var idUser=$("#inicioIdusuario").val();
                    log(actividad,idUser);
        
                },
                error:function(xhr,status){
                    alert("Error en metodo AJAX"); 
                },
            });
        }, 2000);}
        else{
            alertify.error(" <i class='fa fa-times fa-lg'></i> Cancelado",2);
        }
      });

    e.preventDefault();
    return false;
});

$("#frmActualizar-CT").submit(function(e){

    var id        = $("#eIdFC").val();
    var nombre    = $("#enombre").val();
    var fuente    = $("#efuente").val();
    var ebfuerte    = $("#enomenfuerte").val();
    var eborde    = $("#eborde").val();

    swal({
        title: "¿Estas Seguro?",
        text: "¿Deseas Actualizar la información?",
        type: "info",
        showCancelButton: true,
        confirmButtonClass: "btn-success",
        confirmButtonText: "Si deseo actualizarla",
        cancelButtonText: "Cancelar Acción",
        cancelButtonClass: "btn-outline-danger",
        closeOnConfirm: false,
        closeOnCancel: true,
        showLoaderOnConfirm: true
      }, function (isConfirm) {
        if (isConfirm) {
        setTimeout(function () {
            swal.close();
            $.ajax({
                url:"../mCrearTema/actualizar.php",
                type:"POST",
                dateType:"html",
                data:{id,nombrefuente,borde,bfuerte},
                success:function(respuesta){
                    console.log(respuesta);
                    llenar_lista_CT();
                        $("#frmGuardar-CT")[0].reset();
                        $("#frmActualizar-CT")[0].reset();
                        alertify.success("<i class='fa fa-bolt fa-lg'></i>", 2);
                    $("#btnCancelarG-CT , #btnCancelarA-CT").click();
                    actividad  ="Se ha modificado un registro de la tabla "+nombreModulo_CT;
                    var idUser=$("#inicioIdusuario").val();
                    log(actividad,idUser);
                    
                    
                    $('#enombre').focus();
                    $('#efuente').focus();
                    $('#ebfuerte').focus();
                    $('#eborde').focus();

                },
                error:function(xhr,status){
                    alert("Error en metodo AJAX"); 
                },
            });
        }, 2000);}
        else{
            alertify.error(" <i class='fa fa-times fa-lg'></i> Cancelado",2);
        }
      });

    e.preventDefault();
    return false;
});

function llenar_lista_CT(){
    abrirModalCarga('Cargando Lista');
    $("#frmGuardar-CT")[0].reset();
    $("#Listado-CT").hide();
    $.ajax({
        url:"../mCrearTema/lista.php",
        type:"POST",
        dateType:"html",
        data:{},
        success:function(respuesta){
            $("#Listado-CT").html(respuesta);
            $("#Listado-CT").fadeIn("slow");
            cerrarModalCarga();      
            $("#nombre").focus();
            $("#fuente").focus();
            $("#bfuerte").focus();
            $("#nombre").focus();
            $("#borde").focus();

        },
        error:function(xhr,status){
            alert("Error en metodo AJAX"); 
        },
    });
}

function llenar_formulario_CT(id,edesc){
    console.log(id);
    $("#eIdFC").val(id);
    $("#eDesc").val(edesc);

    $("#lblTitular").text(nombreModulo_EC);
    $("#badgeInfo").text("Modificar datos");

    $("#guardar-CT").hide();
    $("#Listado-CT").hide();
    $("#editar-CT").fadeIn();
    $("#enombre").focus();
}

function cambiar_estatus_CT(id,consecutivo){

    var valor=$("#check"+consecutivo).val();
    var contravalor=(valor==1)?0:1;
    $("#check"+consecutivo).val(contravalor);

    $.ajax({
        url:"../mCrearTema/cEstatus.php",
        type:"POST",
        dateType:"html",
        data:{id,contravalor},
        success:function(respuesta){
            // console.log(respuesta);
            if(contravalor==1){
                alertify.success("<i class='fa fa-check fa-lg'></i>", 2);
                $("#btnEditar-CT"+consecutivo).removeAttr('disabled');
                $("#btnExportar-CT"+consecutivo).removeAttr('disabled');
                $("#btnAplicar-CT"+consecutivo).removeAttr('disabled');
                actividad  ="Se ha reactivado un registro de la tabla "+nombreModulo_CT;
                var idUser=$("#inicioIdusuario").val();
                log(actividad,idUser);
            }else{
                alertify.error("<i class='fa fa-times fa-lg'></i>", 2);
                $("#btnEditar-CT"+consecutivo).attr('disabled','disabled');
                $("#btnExportar-CT"+consecutivo).attr('disabled','disabled');
                $("#btnAplicar-CT"+consecutivo).attr('disabled','disabled');
                actividad  ="Se ha desactivado un registro de la tabla "+nombreModulo_CT;
                var idUser=$("#inicioIdusuario").val();
                log(actividad,idUser);
            }
        },
        error:function(xhr,status){
            alert("Error en metodo AJAX"); 
        },
    });

}

$("#btnCancelarG-CT , #btnCancelarA-CT").click(function(){
    $("#editar-CT").hide();
    $("#guardar-CT").hide();

    $("#lblTitular").text(nombreModulo_CT);
    $("#badgeInfo").text("Lista");

    $("#Listado-CT").fadeIn();
 
});


function nuevo_registro_CT(){
    $("#lblTitular").text(nombreModulo_CT);

    $("#badgeInfo").text("Nuevo registro");

    $("#Listado-CT").hide();
    $("#guardar-CT").fadeIn();
    $('#frmGuardar-CT')[0].reset();
    $("#nombre").focus();
    
}

function abrirModalImportar(){
    $("#modalArchivo").modal("show");
}
