var gestionUsuario = {
    "inicializador": function () {
        $('#frm').on('submit', gestionUsuario.validar)
    },
    "validar": function (e) {
        app.detener(e);
        var nombre = $('#txtNombre').val();
        var apellido = $('#txtApellido').val();
        var correo = $('#txtCorreo').val();
        var clave = $('#txtClave').val();
        var parametros = {};
        parametros.txtNombre = nombre;
        parametros.txtApellido = apellido;
        parametros.txtCorreo = correo;
        parametros.txtClave = clave;
        app.peticion('usuario/insertar', parametros, gestionUsuario.respuesta);
    }, "respuesta": function (data) {
        console.log(data);
    }
};
gestionUsuario.inicializador();

