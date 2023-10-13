window.onload = function(){
    /*
     * Estilo cabecera flotante y boton
     */
    const headerDesk = document.querySelector('.header_desktop');
    const headerMovil = document.querySelector('.header_movil');
    const main = document.querySelector('.main');
    const btnUP = document.querySelector('.btn__up');
    var scrollDesk = 0;
    window.addEventListener("scroll", ()=>{
        if(window.scrollY > scrollDesk){
            headerDesk.classList.add("fixeder_header");
            headerMovil.classList.add("fixeder_header");
            pruena = document.querySelectorAll('.fixeder_header')
            main.classList.add("position__main");
            main.classList.add("position__main2")
            btnUP.classList.add("btn__up--on");
        }else{
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
    btnCheck.forEach((check) =>{
        check.addEventListener('click', () => {
            const root = document.documentElement;
            const estilo = getComputedStyle(document.documentElement);
            const color = estilo.getPropertyValue('--bg-dark').trim();
            const foto = document.querySelector('.cnt__photo');
            const logo1 = document.getElementById('logo-1');
            const logo2 = document.getElementById('logo-2');
            const logo3 = document.getElementById('logo-3');

            if(color === '#222831'){
                root.style.setProperty('--bg-dark', '#FEFEFE');
                root.style.setProperty('--white', '#000000');
                root.style.setProperty('--cyan', '#5F27CD');
                root.style.setProperty('--black', '#FFFFFF');
                root.style.setProperty('--text-grey', '#222f3e');
                root.style.setProperty('--text-dark', '#000000');
                root.style.setProperty('--purple', '#00FFFF');      
                foto.classList.add('light__shadow');
                logo1.src = 'resources/img/logo/mc_morado.png';
                logo2.src = 'resources/img/logo/mc_morado.png';
                logo3.src = 'resources/img/logo/mc_logo_morado.png';
                btnUP.style.boxShadow =
                '0px 1.3px 3.6px rgba(0, 0, 0, 0.08), ' +
                '0px 3.6px 10px rgba(0, 0, 0, 0.115), ' +
                '0px 8.7px 24.1px rgba(0, 0, 0, 0.15), ' +
                '0px 29px 80px rgba(0, 0, 0, 0.23)';    
                
            }else{
                root.style.setProperty('--bg-dark', '#222831');
                root.style.setProperty('--white', '#FFFFFF');
                root.style.setProperty('--cyan', '#00FFFF');
                root.style.setProperty('--black', '#000000');
                root.style.setProperty('--text-grey', '#c8d6e5');
                root.style.setProperty('--text-dark', '#8395a7');
                root.style.setProperty('--purple', '#5F27CD');
                logo1.src = 'resources/img/logo/mo_cyan_f.png';
                logo2.src = 'resources/img/logo/mo_cyan_f.png';
                logo3.src = 'resources/img/logo/mo_logo_cyan_f2.png';
                btnUP.style.boxShadow =
                '1px 5.9px 28.1px rgba(0, 0, 0, 0.054),'+
                '2px 11.5px 42.5px rgba(0, 0, 0, 0.078),'+
                '3.1px 17.6px 52.2px rgba(0, 0, 0, 0.097),'+
                '+4.3px 24.9px 60.7px rgba(0, 0, 0, 0.113),'+
                '+6.1px 34.9px 70.8px rgba(0, 0, 0, 0.132),'+
                '+8.9px 51.2px 87.1px rgba(0, 0, 0, 0.156),'+
                '+16px 92px 134px rgba(0, 0, 0, 0.21)';

                
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
      

    checkbox1.addEventListener('click', function() {
    sincronizarCheckboxes(checkbox1);
    });
    
    checkbox2.addEventListener('click', function() {
    sincronizarCheckboxes(checkbox2);
    });


    /*
     * Configuración mostrar y ocultar menu.
     */
    const btnMenu = document.querySelector('.header__icon');
    const menu = document.querySelector('.header_movil-nav');
    const cerrar = document.querySelector('.nav__movil--cerrar');
    btnMenu.addEventListener('click', ()=>{
        menu.style.transform = 'translateX(0%)';

    })
    cerrar.addEventListener('click', ()=>{
        menu.style.transform = 'translateX(250%)';
    })
    main.addEventListener('click', ()=>{
        menu.style.transform = 'translateX(250%)';
    })

    // prueba(cerrar);
    // prueba(main)

    // function prueba(ele){
        
    //     ele.addEventListener('click', ()=>{
    //         menu.style.transform = 'translateX(250%)';
    //     })
    // }



}

