window.onload = function () {
    /*
     * Estilo cabecera flotante, boton y nav
     */


    const header = document.querySelector('header');
    const main = document.querySelector('main');
    const footer = document.querySelector('footer')
    const btnUP = document.querySelector('.btn-up');
    const nav = document.querySelector('.nav')

    const btnMenu = document.querySelector('.icon-menu');
    const btnCerrar = document.querySelector('.icon-cerrar');
    const btnsMenu = document.querySelectorAll('.icon-nav');



    var rect = nav.getBoundingClientRect();
    var posY = rect.top;

    if (posY != 70) {

        header.classList.remove("fixeder_header");
        main.style.top = '0';

        btnUP.style.display = "block";
        header.classList.add("fixeder_header")
        let topHeader = header.offsetHeight;
        nav.style.top = topHeader + 'px';
        main.style.top = topHeader + 'px';

    }
    else {
        header.classList.remove("fixeder_header");
        header.classList.remove("border-shadow")
        main.style.top = '0';

    }

    window.addEventListener('resize', ajustarEstilo);

    function ajustarEstilo() {
        var anchoVentana = window.innerWidth;



        if (anchoVentana > 992) {
            nav.style.display = 'none';
            btnMenu.style.display = 'none';
            btnCerrar.style.display = 'none';
            main.style.top = 0;
            footer.style.top = '50px';
            header.style.borderBottom = 'none';


        } else {

            btnMenu.style.display = 'block';

        }
        if (anchoVentana < 992) {
            if (btnCerrar.style.display == 'block') {
                btnMenu.style.display = 'none';
                btnCerrar.style.display = 'block';
            }
        }

    }


    btnMenu.addEventListener("click", () => {
        btnMenu.style.display = 'none';
        btnCerrar.style.display = 'block';
        nav.style.display = 'flex';
        nav.style.transform = 'translateY(0%)';
        let estado = window.getComputedStyle(header).getPropertyValue('position');

        if (estado != 'fixed') {
            header.classList.add("border-shadow");

        }
        header.style.borderBottom = '1px solid var(--cyan)';
    })

    btnCerrar.addEventListener("click", () => {
        btnMenu.style.display = 'block';
        btnCerrar.style.display = 'none';
        nav.style.transform = 'translateY(-200%)';
        let estado = window.getComputedStyle(header).getPropertyValue('position');

        if (estado != 'fixed') {
            header.classList.remove("border-shadow")
        }
        setTimeout(() => {
            header.style.borderBottom = '1px solid var(--bg)';

        }, 325)
    })

    window.addEventListener("scroll", () => {

        let scrollDesk = 0;
        if (window.scrollY > scrollDesk) {
            btnUP.style.display = "block";

            let estado = window.getComputedStyle(header).getPropertyValue('position');

            if (estado == 'fixed') {

                header.classList.add("fixeder_header")
                header.classList.add("border-shadow")
                let topHeader = header.offsetHeight;
                nav.style.top = topHeader + 'px';
                main.style.top = topHeader + 'px';

            } else {
                header.classList.add("fixeder_header")
                header.classList.add("border-shadow")
                let topHeader = header.offsetHeight;
                main.style.top = topHeader + 'px';
            }


        }
        else {
            btnUP.style.display = "none";
            let estado = window.getComputedStyle(header).getPropertyValue('position');
            var rect = nav.getBoundingClientRect();

            var posY = rect.top;

            if (posY >= 70) {

                header.classList.remove("fixeder_header");
                main.style.top = '0px';
            }
            else {
                header.classList.remove("fixeder_header");
                header.classList.remove("border-shadow")
                main.style.top = '0px';
                console.log('sad')
            }


        }

    })
}