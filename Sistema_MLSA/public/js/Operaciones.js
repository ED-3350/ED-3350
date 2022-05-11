$(document).ready(function () {
    listarRazaTabla();
    listarEstado();
    listarBovino();
    listarToro();
    listarVaquero();
    listarInseminacion();
 
});
//------------------------------------------------------Raza---------------------------------------------------------
let Razas = [];
$(document).on('click', "#registrarRaza", function () {

    var parametros = {

        "Nombre": $("#Nombre").val(),
        "Descripcion": $("#Descripcion").val(),
        "Abreviatura": $("#Abreviatura").val(),

    };
    
    $.ajax({
        type: 'POST',
        url: "?controlador=Usuario&accion=ingresarRaza",
        data: parametros,
        beforeSend: function () {

        },
        success: function (response) {
         alert(JSON.stringify(response));
        }
    });
});
$(document).on('click', "#btnactualizarRaza", function () {

    var parametros = {
        "ID": $("#RazasNombre").val(),
        "Nombre": $("#NombreA").val(),
        "Descripcion": $("#DescripcionA").val(),
        "Abreviatura": $("#AbreviaturaA").val()

    };

    $.ajax({
        type: 'POST',
        url: "?controlador=Usuario&accion=actualizarRaza",
        data: parametros,
        beforeSend: function () {

        },
        success: function (response) {

        }
    });
});
$(document).on('click', "#btneliminarRaza", function () {

    var parametros = {
        "ID": $("#RazasNombres").val()

    };
    $.ajax({
        type: 'POST',
        url: "?controlador=Usuario&accion=eliminarRaza",
        data: parametros,
        beforeSend: function () {

        },
        success: function (response) {

        }
    });
});
//function listarRaza() {
//    $.ajax({
//        type: 'POST',
//        url: "?controlador=Usuario&accion=listarRaza",
//        success: function (response) {
//            // alert(JSON.stringify(response));
//            Razas = JSON.parse(response);
//     alert(JSON.stringify(Razas));
//            cargaRaza();
//            listarRazaTabla();
//        }
//    });
//
//}
//function cargaRaza() {
//
//
//    for (let i = 0; i < Razas.data.length; i++) {
//
//        $("#RazasNombre").append('<option value=' + Razas.data[i][0] + '>' + Razas.data[i][1] + '</option>');
//        $("#RazasNombres").append('<option value=' + Razas.data[i][0] + '>' + Razas.data[i][1] + '</option>');
//        $("#RazasNombresBovino").append('<option value=' + Razas.data[i][0] + '>' + Razas.data[i][1] + '</option>');
//        $("#RazasNombresBovinos").append('<option value=' + Razas.data[i][0] + '>' + Razas.data[i][1] + '</option>');
//
//
//    }
//
//}
function listarRazaTabla() {

    
$("#tablaRaza").DataTable({
        "responsive": true,
        "scrollX": true,
        "destroy": true,
        "ajax": {
            "method": "POST",
            url: "?controlador=Usuario&accion=listarRaza",
        },
        "columns": [
            {"data": '0', "className": "text-center"},
            {"data": '1', "className": "text-center"},
            {"data": '2', "className": "text-center"},
            {"data": '3', "className": "text-center"},
            {"defaultContent": "<button type='button' class='actualizarRaza btn'><i class='fas fa-pen-square'></i></button>"},
            {"defaultContent": "<button type='button' class='eliminarRaza btn'><i class='fas fa-trash''></i></button>"}
            
        ]
    });

}

//------------------------------------------------------Estado---------------------------------------------------------
let Estado = [];
$(document).on('click', "#registrarEstado", function () {

    var parametros = {

        "NombreEstado": $("#NombreEstado").val(),
        "DescripcionEstado": $("#DescripcionEstado").val(),
        "IniciaEstado": $("#IniciaEstado").val(),
        "TerminaEstado": $("#TerminaEstado").val()

    };
    alert(JSON.stringify(parametros));
    $.ajax({
        type: 'POST',
        url: "?controlador=Usuario&accion=ingresarEstado",
        data: parametros,
        beforeSend: function () {

        },
        success: function (response) {

        }
    });
});
$(document).on('click', "#btnactualizarEstado", function () {

    var parametros = {
        "IDEstado": $("#EstadoNombre").val(),
        "NombreEstado": $("#NombreEstadoA").val(),
        "DescripcionEstado": $("#DescripcionEstadoA").val(),
        "IniciaEstado": $("#IniciaEstadoA").val(),
        "TerminaEstado": $("#TerminaEstadoA").val()


    };

    $.ajax({
        type: 'POST',
        url: "?controlador=Usuario&accion=actualizarEstado",
        data: parametros,
        beforeSend: function () {

        },
        success: function (response) {

        }
    });
});
$(document).on('click', "#btneliminarEstado", function () {

    var parametros = {
        "IDEstado": $("#EstadoNombres").val()

    };
    $.ajax({
        type: 'POST',
        url: "?controlador=Usuario&accion=eliminarEstado",
        data: parametros,
        beforeSend: function () {

        },
        success: function (response) {

        }
    });
});
function listarEstado() {
    $.ajax({
        type: 'POST',
        url: "?controlador=Usuario&accion=listarEstado",
        success: function (response) {

            Estado = JSON.parse(response);

            cargaEstado();
            listarEstadoTabla();
        }
    });

}
function cargaEstado() {


    for (let i = 0; i < Estado.data.length; i++) {

        $("#EstadoNombre").append('<option value=' + Estado.data[i][0] + '>' + Estado.data[i][1] + '</option>');
        $("#EstadoNombres").append('<option value=' + Estado.data[i][0] + '>' + Estado.data[i][1] + '</option>');
        $("#EstadoNombresBovino").append('<option value=' + Estado.data[i][0] + '>' + Estado.data[i][1] + '</option>');
        $("#EstadoNombresBovinos").append('<option value=' + Estado.data[i][0] + '>' + Estado.data[i][1] + '</option>');


    }

}
function listarEstadoTabla() {

    for (let i = 0; i < Estado.data.length; i++) {

        $("#tablaEstado").append(
                '<tr>' +
                '<td>' + Estado.data[i][0] + '</td>' +
                '<td>' + Estado.data[i][1] + '</td>' +
                '<td>' + Estado.data[i][2] + '</td>' +
                '<td>' + Estado.data[i][3] + '</td>' +
                '<td>' + Estado.data[i][4] + '</td>' +
                '</tr>');



    }


}
//---------------------------------------------------Bovino--------------------------------------------------------------
let Bovino = [];
$(document).on('click', "#registrarBovino", function () {

    var parametros = {
        "NumeroBovino": $("#NumeroBovino").val(),
        "NombreBovino": $("#NombreBovino").val(),
        "NombreMadre": $("#NombreMadre").val(),
        "NombrePadre": $("#NombrePadre").val(),
        "Fecha": $("#Fecha").val(),
        "EstadoNombresBovino": $("#EstadoNombresBovino").val(),
        "RazasNombresBovino": $("#RazasNombresBovino").val(),
        "PezonesSanos": $("#PezonesSanos").val()

    };
    alert(JSON.stringify(parametros));
    $.ajax({
        type: 'POST',
        url: "?controlador=Usuario&accion=ingresarBovino",
        data: parametros,
        beforeSend: function () {

        },
        success: function (response) {

        }
    });
});
$(document).on('click', "#btnactualizarBovino", function () {

    var parametros = {
        "NumeroBovino": $("#NumeroBovino").val(),
        "NombreBovino": $("#NombreBovino").val(),
        "NombreMadre": $("#NombreMadre").val(),
        "NombrePadre": $("#NombrePadre").val(),
        "Fecha": $("#Fecha").val(),
        "EstadoNombresBovino": $("#EstadoNombresBovino").val(),
        "RazasNombresBovino": $("#RazasNombresBovino").val(),
        "PezonesSanos": $("#PezonesSanos").val()


    };
    alert(JSON.stringify(parametros));
    $.ajax({
        type: 'POST',
        url: "?controlador=Usuario&accion=actualizarBovino",
        data: parametros,
        beforeSend: function () {

        },
        success: function (response) {

        }
    });
});
$(document).on('click', "#btneliminarBovino", function () {

    var parametros = {
        "NumeroBovino": $("#BovinoNombres").val(),
        "FechaMuerte": $("#FechaMuerte").val(),
        "MotivoMuerte": $("#MotivoMuerte").val(),
        "ValorMuerte": $("#ValorMuerte").val()

    };
    alert(JSON.stringify(parametros));
    $.ajax({
        type: 'POST',
        url: "?controlador=Usuario&accion=eliminarBovino",
        data: parametros,
        beforeSend: function () {

        },
        success: function (response) {

        }
    });
});
function listarBovino() {
    $.ajax({
        type: 'POST',
        url: "?controlador=Usuario&accion=listarBovino",
        success: function (response) {

            Bovino = JSON.parse(response);

            cargaBovino();
            listarBovinoTabla();
        }
    });

}
function cargaBovino() {


    for (let i = 0; i < Bovino.data.length; i++) {

        $("#BovinoNombre").append('<option value=' + Bovino.data[i][0] + '>' + Bovino.data[i][0] + '</option>');
        $("#BovinoNombres").append('<option value=' + Bovino.data[i][0] + '>' + Bovino.data[i][0] + '</option>');
        $("#BovinoInseminacion").append('<option value=' + Bovino.data[i][0] + '>' + Bovino.data[i][0] + '</option>');
        $("#BovinosInseminacion").append('<option value=' + Bovino.data[i][0] + '>' + Bovino.data[i][0] + '</option>');


    }

}
function listarBovinoTabla() {

    for (let i = 0; i < Bovino.data.length; i++) {

        $("#tablaBovino").append(
                '<tr>' +
                '<td>' + Bovino.data[i][0] + '</td>' +
                '<td>' + Bovino.data[i][1] + '</td>' +
                '<td>' + Bovino.data[i][2] + '</td>' +
                '<td>' + Bovino.data[i][3] + '</td>' +
                '<td>' + Bovino.data[i][4] + '</td>' +
                '<td>' + Bovino.data[i][5] + '</td>' +
                '<td>' + Bovino.data[i][6] + '</td>' +
                '<td>' + Bovino.data[i][7] + '</td>' +
                '<td>' + Bovino.data[i][8] + '</td>' +
                '</tr>');



    }


}
//---------------------------------------------------Toro--------------------------------------------------------------
let Toro = [];
$(document).on('click', "#registrarToro", function () {
    alert("lo");
    var parametros = {
        "ToroSerie": $("#ToroSerie").val(),
        "NombreToro": $("#NombreToro").val(),
        "CasaComercialToro": $("#CasaComercialToro").val(),
        "ToroRaza": $("#ToroRaza").val()

    };
    alert(JSON.stringify(parametros));
    $.ajax({
        type: 'POST',
        url: "?controlador=Usuario&accion=ingresarToro",
        data: parametros,
        beforeSend: function () {

        },
        success: function (response) {

        }
    });
});
$(document).on('click', "#btnactualizarToro", function () {

    var parametros = {
        "ToroSerie": $("#ToroNombre").val(),
        "NombreToro": $("#NombreToroA").val(),
        "CasaComercialToro": $("#CasaComercialToroA").val(),
        "ToroRaza": $("#ToroRazaA").val()


    };
    alert(JSON.stringify(parametros));
    $.ajax({
        type: 'POST',
        url: "?controlador=Usuario&accion=actualizarToro",
        data: parametros,
        beforeSend: function () {

        },
        success: function (response) {

        }
    });
});
$(document).on('click', "#btneliminarToro", function () {

    var parametros = {
        "ToroSerie": $("#ToroNombres").val(),
        "FechaMuerte": $("#FechaMuerteToro").val(),
        "MotivoMuerte": $("#MotivoMuerteToro").val(),
        "ValorMuerte": $("#ValorMuerteToro").val()

    };
    alert(JSON.stringify(parametros));
    $.ajax({
        type: 'POST',
        url: "?controlador=Usuario&accion=eliminarToro",
        data: parametros,
        beforeSend: function () {

        },
        success: function (response) {

        }
    });
});
function listarToro() {
    $.ajax({
        type: 'POST',
        url: "?controlador=Usuario&accion=listarToro",
        success: function (response) {

            Toro = JSON.parse(response);

            cargaToro();
            listarToroTabla();
        }
    });

}
function cargaToro() {


    for (let i = 0; i < Toro.data.length; i++) {

        $("#ToroNombre").append('<option value=' + Toro.data[i][0] + '>' + Toro.data[i][0] + '</option>');
        $("#ToroNombres").append('<option value=' + Toro.data[i][0] + '>' + Toro.data[i][0] + '</option>');
        $("#ToroInseminacion").append('<option value=' + Toro.data[i][0] + '>' + Toro.data[i][0] + '</option>');
        $("#TorosInseminacion").append('<option value=' + Toro.data[i][0] + '>' + Toro.data[i][0] + '</option>');


    }

}
function listarToroTabla() {

    for (let i = 0; i < Toro.data.length; i++) {

        $("#tablaToro").append(
                '<tr>' +
                '<td>' + Toro.data[i][0] + '</td>' +
                '<td>' + Toro.data[i][1] + '</td>' +
                '<td>' + Toro.data[i][2] + '</td>' +
                '<td>' + Toro.data[i][3] + '</td>' +
                '</tr>');



    }


}
//---------------------------------------------------Vaquero--------------------------------------------------------------
let Vaquero = [];
$(document).on('click', "#registrarVaquero", function () {
    alert("lo");
    var parametros = {
        "Vaquerocedula": $("#Vaquerocedula").val(),
        "Vaqueronombre": $("#Vaqueronombre").val(),
        "Vaqueroroll": $("#Vaqueroroll").val()
    };
    alert(JSON.stringify(parametros));
    $.ajax({
        type: 'POST',
        url: "?controlador=Usuario&accion=ingresarVaquero",
        data: parametros,
        beforeSend: function () {

        },
        success: function (response) {

        }
    });
});
$(document).on('click', "#btnactualizarVaquero", function () {

    var parametros = {
        "Vaquerocedula": $("#VaqueroNombre").val(),
        "Vaqueronombre": $("#VaqueronombreA").val(),
        "Vaqueroroll": $("#VaquerorollA").val()


    };
    alert(JSON.stringify(parametros));
    $.ajax({
        type: 'POST',
        url: "?controlador=Usuario&accion=actualizarVaquero",
        data: parametros,
        beforeSend: function () {

        },
        success: function (response) {

        }
    });
});
$(document).on('click', "#btneliminarVaquero", function () {

    var parametros = {
        "Vaquerocedula": $("#VaqueroNombres").val()


    };
    alert(JSON.stringify(parametros));
    $.ajax({
        type: 'POST',
        url: "?controlador=Usuario&accion=eliminarVaquero",
        data: parametros,
        beforeSend: function () {

        },
        success: function (response) {

        }
    });
});
function listarVaquero() {
    $.ajax({
        type: 'POST',
        url: "?controlador=Usuario&accion=listarVaquero",
        success: function (response) {

            Vaquero = JSON.parse(response);

            cargaVaquero();
            listarVaqueroTabla();
        }
    });

}
function cargaVaquero() {


    for (let i = 0; i < Vaquero.data.length; i++) {

        $("#VaqueroNombre").append('<option value=' + Vaquero.data[i][0] + '>' + Vaquero.data[i][0] + '</option>');
        $("#VaqueroNombres").append('<option value=' + Vaquero.data[i][0] + '>' + Vaquero.data[i][0] + '</option>');
        $("#VaqueroInseminacion").append('<option value=' + Vaquero.data[i][0] + '>' + Vaquero.data[i][0] + '</option>');
        $("#VaquerosInseminacion").append('<option value=' + Vaquero.data[i][0] + '>' + Vaquero.data[i][0] + '</option>');


    }

}
function listarVaqueroTabla() {

    for (let i = 0; i < Vaquero.data.length; i++) {

        $("#tablaVaquero").append(
                '<tr>' +
                '<td>' + Vaquero.data[i][0] + '</td>' +
                '<td>' + Vaquero.data[i][1] + '</td>' +
                '<td>' + Vaquero.data[i][2] + '</td>' +
                '</tr>');



    }


}
//---------------------------------------------------Vaquero--------------------------------------------------------------
let Inseminacion = [];
$(document).on('click', "#registrarInseminacion", function () {
    alert("lo");
    var parametros = {
        "NumeroBovino": $("#BovinoInseminacion").val(),
        "ToroSerie": $("#ToroInseminacion").val(),
        "FechaInseminacion": $("#FechaInseminacion").val(),
        "Vaquerocedula": $("#VaqueroInseminacion").val(),
        "DescripcionInseminacion": $("#DescripcionInseminacion").val()

    };
    alert(JSON.stringify(parametros));
    $.ajax({
        type: 'POST',
        url: "?controlador=Usuario&accion=ingresarInseminacion",
        data: parametros,
        beforeSend: function () {

        },
        success: function (response) {

        }
    });
});
$(document).on('click', "#btnactualizarInseminacion", function () {

    var parametros = {
        "InseminacionId": $("#InseminacionNombre").val(),
        "NumeroBovino": $("#BovinosInseminacion").val(),
        "ToroSerie": $("#TorosInseminacion").val(),
        "FechaInseminacion": $("#FechaInseminacionA").val(),
        "Vaquerocedula": $("#VaquerosInseminacion").val(),
        "DescripcionInseminacion": $("#DescripcionInseminacionA").val()


    };
    alert(JSON.stringify(parametros));
    $.ajax({
        type: 'POST',
        url: "?controlador=Usuario&accion=actualizarInseminacion",
        data: parametros,
        beforeSend: function () {

        },
        success: function (response) {

        }
    });
});

function listarInseminacion() {
    $.ajax({
        type: 'POST',
        url: "?controlador=Usuario&accion=listarInseminacion",
        success: function (response) {

            Inseminacion = JSON.parse(response);

            cargaInseminacion();
            listarInseminacionTabla();
        }
    });

}
function cargaInseminacion() {


    for (let i = 0; i < Inseminacion.data.length; i++) {

        $("#InseminacionNombre").append('<option value=' + Inseminacion.data[i][0] + '>' + Inseminacion.data[i][0] + '</option>');
        $("#InseminacionNombres").append('<option value=' + Inseminacion.data[i][0] + '>' + Inseminacion.data[i][0] + '</option>');



    }

}
function listarInseminacionTabla() {

    for (let i = 0; i < Inseminacion.data.length; i++) {

        $("#tablaInseminacion").append(
                '<tr>' +
                '<td>' + Inseminacion.data[i][0] + '</td>' +
                '<td>' + Inseminacion.data[i][1] + '</td>' +
                '<td>' + Inseminacion.data[i][2] + '</td>' +
                '<td>' + Inseminacion.data[i][3] + '</td>' +
                '<td>' + Inseminacion.data[i][4] + '</td>' +
                '<td>' + Inseminacion.data[i][5] + '</td>' +
                '</tr>');



    }


}