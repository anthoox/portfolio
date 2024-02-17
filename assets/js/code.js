window.onload = function () {
    // Variables seleccionadas del DOM
    const header = document.querySelector('header');
    const main = document.querySelector('main');
    const footer = document.querySelector('footer');
    const btnUP = document.querySelector('.btn-up');
    const nav = document.querySelector('.nav');
    const btnMenu = document.querySelector('.icon-menu');
    const btnCerrar = document.querySelector('.icon-cerrar');

    // Ajustamos los estilos al cargar la página y al cambiar el tamaño de la ventana
    ajustarEstilo();
    window.addEventListener('resize', ajustarEstilo);

    // Función para ajustar los estilos según el tamaño de la ventana y la posición del nav
    function ajustarEstilo() {
        // Obtenemos el ancho de la ventana
        const anchoVentana = window.innerWidth;
        // Obtenemos la posición vertical del header
        const rect = header.getBoundingClientRect();
        const posY = rect.top;

        // Si el header no está en la posición inicial
        if (posY !== 0) {
            // Se ajustan los estilos para fijar el header en la parte superior y mostrar el botón de retorno
            header.classList.remove("fixeder_header");
            main.style.top = '0';
            btnUP.style.display = "block";
            header.classList.add("fixeder_header");
            header.classList.add("border-shadow");
            let topHeader = header.offsetHeight;
            nav.style.top = topHeader + 'px';
            main.style.top = topHeader + 'px';
        } else {
            // Si el header está en la posición inicial, se eliminan los estilos adicionales
            header.classList.remove("fixeder_header");
            header.classList.remove("border-shadow");
            main.style.top = '0';
        }

        // Si el ancho de la ventana es mayor que 992px
        if (anchoVentana > 992) {
            // Se oculta el menú y se establecen otros estilos
            ocultarMenu();
            main.style.top = '0';
            footer.style.top = '50px';
            header.style.borderBottom = 'none';
            btnCerrar.style.display = 'none';
        } else {
            // Si el ancho de la ventana es menor o igual a 992px, se muestra el botón de menú
            btnMenu.style.display = 'block';
            // Si el botón de cerrar está visible, se oculta el botón de menú
            if (btnCerrar.style.display === 'block') {
                btnMenu.style.display = 'none';
            }
        }
    }

    // Abrir el menú
    btnMenu.addEventListener('click', abrirMenu);

    // Cerrar el menú
    btnCerrar.addEventListener('click', cerrarMenu);

    // Escuchar el evento de desplazamiento de la ventana
    window.addEventListener('scroll', () => {
        // Si el desplazamiento vertical de la ventana es mayor que 0
        if (window.scrollY > 0) {
            // Se muestra el botón de retorno y se ajusta el header
            btnUP.style.display = 'block';
            ajustarHeader();
        } else {
            // Si el desplazamiento vertical de la ventana es 0, se oculta el botón de retorno y se restablece el header
            btnUP.style.display = 'none';
            resetearHeader();
        }
    });

    // Función para ajustar el header al desplazar la página
    function ajustarHeader() {
        // Se obtiene el estado del header
        const estado = window.getComputedStyle(header).getPropertyValue('position');
        // Se añade la clase para fijar el header si aún no está fijo
        header.classList.add('fixeder_header');
        // Si el header no está fijo, se añade sombra y se ajusta la posición del nav
        if (estado !== 'fixed') {
            header.classList.add('border-shadow');
            const topHeader = header.offsetHeight;
            nav.style.top = `${topHeader}px`;
            main.style.top = `${topHeader}px`;
        }
    }

    // Función para resetear el header a su estado original
    function resetearHeader() {
        // Se obtiene el estado del header
        const estado = window.getComputedStyle(header).getPropertyValue('position');
        // Se elimina la clase para fijar el header
        header.classList.remove('fixeder_header');
        // Si el header está fijo, se elimina la sombra y se restablecen los estilos
        if (estado === 'fixed') {
            header.classList.remove('border-shadow');
            main.style.top = '0px';
            header.style.borderBottom = 'none';
            const rect = nav.getBoundingClientRect();
            const posY = rect.top;
            // Si la posición vertical del nav es mayor o igual a 70, se restablecen los estilos
            if (posY >= 70) {
                main.style.top = '0px';
            }
        }
    }

    // Función para abrir el menú
    function abrirMenu() {
        btnMenu.style.display = 'none';
        btnCerrar.style.display = 'block';
        nav.style.display = 'flex';
        nav.style.transform = 'translateY(0%)';
        const estado = window.getComputedStyle(header).getPropertyValue('position');
        // Si el header no está fijo, se añade sombra
        if (estado !== 'fixed') {
            header.classList.add('border-shadow');
        }
        header.style.borderBottom = '1px solid var(--cyan)';
    }

    // Función para cerrar el menú
    function cerrarMenu() {
        btnMenu.style.display = 'block';
        btnCerrar.style.display = 'none';
        nav.style.transform = 'translateY(-200%)';
        const estado = window.getComputedStyle(header).getPropertyValue('position');
        // Si el header no está fijo, se elimina la sombra después de un pequeño retraso
        if (estado !== 'fixed') {
            header.classList.remove('border-shadow');
        }
        setTimeout(() => {
            header.style.borderBottom = '1px solid var(--bg)';
        }, 325);
    }

    // Función para ocultar el menú y restablecer los estilos
    function ocultarMenu() {
        btnMenu.style.display = 'none';
        nav.style.display = 'none';
        main.style.top = '0';
        footer.style.top = '50px';
        header.style.borderBottom = 'none';
    }
};