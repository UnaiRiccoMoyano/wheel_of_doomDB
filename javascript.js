var nombres ;
var muertos = [];
var longitud;
var nomRandom;
var div;
var nuevoH1;
var texto;
var colocarH1;
var valorRandom;
var apariencia;
var fantasmas;
var animacion = document.getElementById("rejilla");



function checkDataBase(users){
    $.ajax({
        type: "POST",
    url: "../Weel-of-Doom-master/functions/connect.php",
    data: {
    users: users
    },
    success: function( data ) {
        nombres=data;
        console.log("nombres===== ", nombres);
    },
    dataType:"json"
    });
 }

function desactivarAn() {

    setTimeout(function () {

        if (animacion.classList.contains('active')) {
            animacion.classList.remove("active");
        }
    }, 5000)

}

function updateUser(dato){
    $.ajax({
        type: "GET",
    url: "../Weel-of-Doom-master/functions/connect.php",
    data: {
        name: dato
    },
    success: function( data ) {
        console.log("data: ",data);
    }
    });
}
function reseleccionar() {
    console.log(nombres);
    if (!animacion.classList.contains("active")) {
        animacion.classList.add("active");
    }
    nomRandom = Math.floor(Math.random() * nombres.length);
    div = document.getElementById("colocar");

    if (typeof nombres !== 'undefined' && nombres.length > 0) {
        div.innerHTML = nombres;
        console.log(nombres);
        
    }
/*
    for (var i = 0; i < nombres.length; i++) {
        if (nombres[i] === nombres[nomRandom]) {
            var dato = nombres.splice(i, 1);
            muertos.push(dato);
        }
    }*/

   // updateUser(div.textContent);
    fantasmas();
    desactivarAn();
    //checkDataBase();
}




function fantasmas() {
  //  console.log(apariencia);
    apariencia = document.getElementById("nombresLista");
    apariencia.innerHTML = "";
    for (var i = 0; i < muertos.length; i++) {
        apariencia.innerHTML += "<li>" + muertos[i] + "</li>";
        console.log[i];
    }
    console.log(fantasmas);
}



function reload() {
    window.location.reload();
}
checkDataBase("users");