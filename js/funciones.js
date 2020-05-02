function agregarform(datos) {
    d = datos.split('||');

    $('#midmarca').val(d[0]);
    $('#memarca').val(d[1]);
    $('#mefechafundacion').val(d[2]);
    $('#mepropietario').val(d[3]);
    $('#mimagen').valueOf(d[4])
}


