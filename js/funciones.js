function agregarform(datos) {
    d = datos.split('||');

    $('#midmarca').val(d[0]);
    $('#memarca').val(d[1]);
    $('#mefechafundacion').val(d[2]);
    $('#mepropietario').val(d[3]);
    $('#mimagen').valueOf(d[4])
}

function eform(datose) {
    d = datose.split('||');

    $('#eidestilo').val(d[0]);
    $('#ecbmarcas').val(d[1]);
    $('#eestilo').val(d[2]);
    $('#efechacreacion').val(d[3]);
    $('#efechalanzamiento').val(d[4]);
    $('#edisenador').val(d[5])
}
