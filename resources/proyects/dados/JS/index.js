//Seleccion el boton por clase
const btn = document.querySelector(".botones");
const btn2 = document.querySelector(".botones2");

//Seleccion de los contenedores de los juegos para poder ocultarla o mostrarla
const ventana = document.querySelector(".cnt-dados");
const ventana2 = document.querySelector(".cnt-dados-2d");
const caras = document.querySelectorAll(".dado-2d");
for (var i = 0; i < caras.length; i++) {
    //recorremos el array y le añadimos a cada elemento del array el siguiente evento:
    caras[i].addEventListener("click", tirarDado2D)
}


//Variables para identificar items por id
const dado = document.getElementById('dado');
const juego3d = document.getElementById('3d');
const juego2d = document.getElementById('2d');


//configuracion de eventos pendientes del tirarDado3D del botón para hacer sus funciones asignadas.
btn.addEventListener("click", tirarDado3D);
btn2.addEventListener("click", tirarDado2D);
ventana.addEventListener("click", ocultarMostrar);
ventana2.addEventListener("click", ocultarMostrar);

//Funciones:

var lado
function tirarDado3D() {
    dado.style.animation = 'none';

    //Generamos una variable de contenido aleatorio para cuando se selecciones una cara. 
    lado = Math.floor(Math.random() * 6);
    setTimeout(function () {//usamos setTimeout para poder aplicar la animación rotar, sino directamente se iria a la cara.
        switch (lado) {
            case 0:
                dado.style.animation = 'rotar 0.25s linear';
                dado.style.transform = 'rotateY(120deg) rotateX(90deg) rotateZ(90deg)';
                break;
            case 1:
                dado.style.animation = 'rotar 0.25s linear';
                dado.style.transform = 'rotateY(120deg) rotateX(180deg) rotateZ(90deg)';
                break;
            case 2:
                dado.style.animation = 'rotar 0.25s linear';
                dado.style.transform = 'rotateY(110deg) rotateX(270deg) rotateZ(100deg)';
                break;
            case 3:
                dado.style.animation = 'rotar 0.25s linear';
                dado.style.transform = 'rotateY(210deg) rotateX(0deg) rotateZ(90deg)';
                break;
            case 4:
                dado.style.animation = 'rotar 0.25s linear';
                dado.style.transform = 'rotateY(120deg)';
                break;
            case 5:
                dado.style.animation = 'rotar 0.25s linear';
                dado.style.transform = 'rotateY(120deg) rotateX(180deg)';
                break;
        }
    }, 1)// Dejamos un 1 como unidad, solo necesitamos que haya una pausa para ejecutar la animacion
}


var visible = true;
function ocultarMostrar() {
    if (visible == true) {
        juego3d.style.display = 'none';
        juego2d.style.display = 'flex'
        reseteoAnimacion2();//detenido el movimiento q se producia al cambiar del 3d al 2d
        visible = false;
    } else {
        juego3d.style.display = 'flex';
        juego2d.style.display = 'none'
        visible = true;
    }

}

var aux = 0;
function tirarDado2D() {
    lado = Math.floor(Math.random() * 6);

    reseteoPosicion();

    switch (lado) {
        case 0:
            setTimeout(function () {
                caras[0].style.zIndex = '50';
                caras[0].style.scale = '1'
                caras[0].style.animation = 'rotar2 0.25s linear';
            }, 100);
            break;
        case 1:
            setTimeout(function () {

                caras[1].style.zIndex = '50';
                caras[1].style.scale = '1';
                caras[1].style.animation = 'rotar2 0.25s linear';
            }, 100);
            break;
        case 2:
            setTimeout(function () {

                caras[2].style.zIndex = '50';
                caras[2].style.scale = '1';
                caras[2].style.animation = 'rotar2 0.25s linear';
            }, 100);
            break;
        case 3:
            setTimeout(function () {

                caras[3].style.zIndex = '50';
                caras[3].style.scale = '1';
                caras[3].style.animation = 'rotar2 0.25s linear';
            }, 100);
            break;
        case 4:
            setTimeout(function () {
                caras[4].style.animation = 'rotar2 0.25s linear';
                caras[4].style.zIndex = '50';
                caras[4].style.scale = '1';
            }, 100);
            break;
        case 5:
            setTimeout(function () {

                caras[5].style.zIndex = '50';
                caras[5].style.scale = '1';
                caras[5].style.animation = 'rotar2 0.25s linear';
            }, 100);
            break;
    }
    aux = lado;
}

function reseteoPosicion() {
    for (let i = 0; i < caras.length; i++) {
        caras[i].style.zIndex = '1';
        caras[i].style.scale = '0.6';
        caras[i].style.animation = 'none'
    }
}

function reseteoAnimacion2() {
    for (let i = 0; i < caras.length; i++) {
        caras[i].style.zIndex = '1';
        caras[i].style.scale = '1';
        caras[i].style.animation = 'none';
    }
}





