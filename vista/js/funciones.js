
var app = {
    "detener": function (e) {
        if (e.preventDefault) {
            e.preventDefault();
        }
        if (e.StopPropagation) {
            e.StopPropagation();
        }
        if (e.returnValue) {
            e.returnValue = false;
        }
    },
    "peticion": function (url, parametros, funcion) {
        $.ajax({
            "url": url,
            "type": 'POST',
            "data": parametros,
            success: function (data) {
                funcion(data);
            }, error: function (error) {
                console.log(error);
            }

        });
    }
};

