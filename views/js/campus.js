function editarCampo(nombreCampo, nombreBoton){
    var campo = document.getElementById(nombreCampo);
    campo.readOnly = false;
    campo.style.borderColor = "orange";
    campo.style.backgroundColor = "white";
    document.getElementById(nombreBoton).style.display = "none";
}


function clave(passPhp){
var passwordActual = document.getElementById("anteriorPass").value;
var elemento = document.getElementById("anteriorPass");

if (md5(passwordActual) == passPhp){
    elemento.style.borderColor = "#2ECC71";
    elemento.style.color = "#2ECC71";

    var passActualInc = document.getElementById("passActualIncorrecta").style.display = "none";

    var passwordNueva = document.getElementById("nuevaPass").value;
    var passwordNueva2 = document.getElementById("nuevaPass2").value;
    var elemento2 = document.getElementById("nuevaPass");
    var elemento3 = document.getElementById("nuevaPass2");

    if(passwordNueva == passwordNueva2 && passwordNueva.length >= 8){
        elemento2.style.borderColor = "#2ECC71";
        elemento2.style.color = "#2ECC71";
        elemento3.style.borderColor = "#2ECC71";
        elemento3.style.color = "#2ECC71";

        var passNuevaInc = document.getElementById("passNuevaIncorrecta").style.display = "none";
       
        document.cambioPass.submit();

    }else{
        elemento2.style.borderColor = "#E74C3C";
        elemento2.style.color = "#E74C3C";
        elemento3.style.borderColor = "#E74C3C";
        elemento3.style.color = "#E74C3C";

        var passNuevaInc = document.getElementById("passNuevaIncorrecta").style.display = "block";
        return false;

    }

}else{
   elemento.style.borderColor = "#E74C3C";
   elemento.style.color = "#E74C3C";

   var passActualInc = document.getElementById("passActualIncorrecta").style.display = "block";
   return false;

}
}