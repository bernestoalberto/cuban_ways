function getParameter(){
    // Obtiene la cadena completa de URL
    var url = location.href;
    /* Obtiene la posicion donde se encuentra el signo ?,
     ahi es donde empiezan los parametros */var index = url.indexOf("?");
    /* Obtiene la posicion donde termina el nombre del parametro
     e inicia el signo = */
    /* Verifica que efectivamente el valor en la posicion actual
     es el signo = */
    url=url.substring(0,index);
    return url;
}
//JavaScript para validar la entradad de datos en los locales
function permite(elEvento, permitidos) {
    // Variables que definen los caracteres permitidos
    var numeros = "0123456789";
    var decimal = "0123456789."
    var date = "0123456789/"
    var time = "0123456789:"
    var issn = "0123456789-"
    var none = ""
    var caracteres = " abcdefghijklmn?opqñrstuvwxyzABCDEFGHIJKLMÑN?OPQRSTUVWXYZéáíóú";
    var numeros_caracteres = numeros + caracteres;
    var teclas_especiales = [8, 37, 39, 46];
    // 8 = BackSpace, 46 = Supr, 37 = flecha izquierda, 39 = flecha derecha
    // Seleccionar los caracteres a partir del par?metro de la funci?n
    switch(permitidos) {
        case 'num':
            permitidos = numeros;
            break;
        case 'car':
            permitidos = caracteres;
            break;
        case 'num_car':
            permitidos = numeros_caracteres;
            break;
        case 'dec':
            permitidos=decimal;
        case 'date':
            permitidos=date;
            break;
        case 'time':
            permitidos=time;
            break;
        case 'issn':
            permitidos=issn;
            break;
        case 'none':
            permitidos=none;
            break;
    }

    // Obtener la tecla pulsada
    var evento = elEvento || window.event;
    var codigoCaracter = evento.charCode || evento.keyCode;
    var caracter = String.fromCharCode(codigoCaracter);

    // Comprobar si la tecla pulsada es alguna de las teclas especiales
    // (teclas de borrado y flechas horizontales)
    var tecla_especial = false;
    for(var i in teclas_especiales) {
        if(codigoCaracter == teclas_especiales[i]) {
            tecla_especial = true;
            break;
        }
    }
    // Comprobar si la tecla pulsada se encuentra en los caracteres permitidos
    // o si es una tecla especial
    return permitidos.indexOf(caracter) != -1 || tecla_especial;

}
//-------------------------------------------------------------------------------------------------------------------------------------------------


