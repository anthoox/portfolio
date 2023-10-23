window.onload = function () {
    /*
     * Estilo cabecera flotante y boton
     */
    const headerDesk = document.querySelector('.header_desktop');
    const headerMovil = document.querySelector('.header_movil');
    const main = document.querySelector('.main');
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


    /*
        * Boton para cambiar color
        * cuando se marque el check debe cambiar los colores, la sombra de la foto y la sombra del boton flotante
        * 
        */
    const btnCheck = document.querySelectorAll('.checkbox');
    btnCheck.forEach((check) => {
        check.addEventListener('click', () => {
            const root = document.documentElement;
            const estilo = getComputedStyle(document.documentElement);
            const color = estilo.getPropertyValue('--bg').trim();
            const foto = document.querySelector('.a__photo');
            const logo1 = document.getElementById('logo-1');
            const logo2 = document.getElementById('logo-2');
            const logo3 = document.getElementById('logo-3');
            const card = document.querySelectorAll('.card');

            if (color === '#282a36') {
                root.style.setProperty('--bg', '#FAFAFA');
                root.style.setProperty('--primary', '#000000');
                root.style.setProperty('--cyan', '#5F27CD');
                root.style.setProperty('--black', '#F5F9FF');
                root.style.setProperty('--secondary', '#3A3A3A');
                root.style.setProperty('--purple', '#00FFFF');
                root.style.setProperty('color-scheme', 'light');
                foto.classList.add('light__shadow');
                logo1.src = 'resources/img/logo/mc_morado.png';
                logo2.src = 'resources/img/logo/mc_morado.png';
                logo3.src = 'resources/img/logo/mc_logo_morado.png';
                card.forEach((element) => {
                    element.classList.add('card-light');
                })
                card.classList.add('card-light');
            } else {
                root.style.setProperty('--bg', '#282a36');
                root.style.setProperty('--primary', '#F5F9FF');
                root.style.setProperty('--cyan', '#00FFFF');
                root.style.setProperty('--black', '#000000');
                root.style.setProperty('--secondary', '#c8d6e5');
                root.style.setProperty('--purple', '#5F27CD');
                root.style.setProperty('color-scheme', 'dark');
                logo1.src = 'resources/img/logo/mo_cyan_f.png';
                logo2.src = 'resources/img/logo/mo_cyan_f.png';
                logo3.src = 'resources/img/logo/mo_logo_cyan_f2.png';
                card.forEach((element) => {
                    element.classList.remove('card-light');
                })

            }
        })

    })
    const checkbox1 = document.getElementById('check1');
    const checkbox2 = document.getElementById('check2');
    function sincronizarCheckboxes(checkbox) {
        const checkbox1 = document.getElementById('check1');
        const checkbox2 = document.getElementById('check2');
        if (checkbox === checkbox1) {
            checkbox2.checked = checkbox1.checked;
        } else if (checkbox === checkbox2) {
            checkbox1.checked = checkbox2.checked;
        }
    }


    checkbox1.addEventListener('click', function () {
        sincronizarCheckboxes(checkbox1);
    });

    checkbox2.addEventListener('click', function () {
        sincronizarCheckboxes(checkbox2);
    });


    /*
     * Configuración mostrar y ocultar menu.
     */
    const btnMenu = document.querySelector('.header__icon');
    const menu = document.querySelector('.header_movil-nav');
    const cerrar = document.querySelector('.nav__movil--cerrar');
    btnMenu.addEventListener('click', () => {
        menu.style.transform = 'translateX(0%)';

    })
    cerrar.addEventListener('click', () => {
        menu.style.transform = 'translateX(250%)';
    })
    main.addEventListener('click', () => {
        menu.style.transform = 'translateX(250%)';
    })



    var professionElement = document.querySelector(".profession");

    function restartAnimation() {
        professionElement.style.animation = "none";
        void professionElement.offsetWidth; // Reinicia la animación
        professionElement.style.animation = null;
    }

    setInterval(restartAnimation, 10000);
}

