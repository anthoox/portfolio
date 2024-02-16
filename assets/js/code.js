window.onload = function () {
    /*
     * Estilo cabecera flotante y boton
     */
    const headerDesk = document.querySelector('header');
    const main = document.querySelector('main');
    const btnUP = document.querySelector('.btn__up');
    var scrollDesk = 0;
    window.addEventListener("scroll", () => {
        if (window.scrollY > scrollDesk) {
            headerDesk.classList.add("fixeder_header");
            headerMovil.classList.add("fixeder_header");
            pruena = document.querySelectorAll('.fixeder_header')
            main.classList.add("position__main");
            main.classList.add("position__main2")
            btnUP.classList.add("btn__up--on");
        } else {
            headerDesk.classList.remove("fixeder_header");
            headerMovil.classList.remove("fixeder_header");
            main.classList.remove("position__main");
            main.classList.remove("position__main2")
            btnUP.classList.remove("btn__up--on");
        }
    })
}