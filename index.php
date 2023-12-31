<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'resources/email/PHPMailer/Exception.php';
require 'resources/email/PHPMailer/PHPMailer.php';
require 'resources/email/PHPMailer/SMTP.php';

// Cargamos los datos tras pasarlos por el validador
require_once 'resources/email/validador.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

if($error == false){
    try {

        //Server settings
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'mail.anthoox.es';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'no-reply@anthoox.es';                     //SMTP username
        $mail->Password   = 'A4;oE4Lp##Vx';                               //SMTP password
        $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('no-reply@anthoox.es', 'Anthoox');
        $mail->addAddress('kray.a4@gmail.com', 'Anthony Alegría');     //Add a recipient
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Email de contacto web';
        $mail->Body    = '<p>Mensaje enviado desde web:  <b>anthoox.es</b></p>'
                        . "<b>Nombre</b>: " . $datosForm['nombre'] . "<br>"
                        . "<b>Email</b>: " . $datosForm['email'] . "<br>"
                        . "<b>Mensaje</b>: " . $datosForm['mensaje'] . "<br>";
    
        $mail->send();

        $resultado = '<p class="email-ok">Mensaje enviado</p>';
    } catch (Exception $e) {
        echo "Error en el envio";
    }
}


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Anthony Alegría Alcántara" />
    <meta name="copyright" content="anthoox" />
    <meta name="description" content="Web portfolio personal donde se muestran mis proyectos y capacidades">
    <title>anthoox - desarrollador de aplicaciones web</title>
    <link rel="stylesheet" href="resources/css/style.css">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;400;500&family=Nunito:wght@300;400&family=Quicksand:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="resources/css/animations.css">
    <link rel="shortcut icon" href="resources/img/logo/iconoo.ico" />
    <meta name="robots" content="index, follow">
    <script src="resources/js/code.js"></script>

</head>

<body id="home">
    <!-- CABECERA MOVIL -->
    <header class="header_movil">
        <div>
            <a href="#home"><img id="logo-1" src="resources/img/logo/mo_cyan_f.png" alt="Logo de la web"
                    class="header_logo"></a>
        </div>
        <div class="header_movil-btns">
            <label class="switch-name">
                <input id="check1" type="checkbox" class="checkbox">
                <div class="back"></div>
                <svg class="moon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path
                        d="M223.5 32C100 32 0 132.3 0 256S100 480 223.5 480c60.6 0 115.5-24.2 155.8-63.4c5-4.9 6.3-12.5 3.1-18.7s-10.1-9.7-17-8.5c-9.8 1.7-19.8 2.6-30.1 2.6c-96.9 0-175.5-78.8-175.5-176c0-65.8 36-123.1 89.3-153.3c6.1-3.5 9.2-10.5 7.7-17.3s-7.3-11.9-14.3-12.5c-6.3-.5-12.6-.8-19-.8z">
                    </path>
                </svg>
                <svg class="sun" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path
                        d="M361.5 1.2c5 2.1 8.6 6.6 9.6 11.9L391 121l107.9 19.8c5.3 1 9.8 4.6 11.9 9.6s1.5 10.7-1.6 15.2L446.9 256l62.3 90.3c3.1 4.5 3.7 10.2 1.6 15.2s-6.6 8.6-11.9 9.6L391 391 371.1 498.9c-1 5.3-4.6 9.8-9.6 11.9s-10.7 1.5-15.2-1.6L256 446.9l-90.3 62.3c-4.5 3.1-10.2 3.7-15.2 1.6s-8.6-6.6-9.6-11.9L121 391 13.1 371.1c-5.3-1-9.8-4.6-11.9-9.6s-1.5-10.7 1.6-15.2L65.1 256 2.8 165.7c-3.1-4.5-3.7-10.2-1.6-15.2s6.6-8.6 11.9-9.6L121 121 140.9 13.1c1-5.3 4.6-9.8 9.6-11.9s10.7-1.5 15.2 1.6L256 65.1 346.3 2.8c4.5-3.1 10.2-3.7 15.2-1.6zM160 256a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zm224 0a128 128 0 1 0 -256 0 128 128 0 1 0 256 0z">
                    </path>
                </svg>
            </label>
            <i class="header__icon las la-bars"></i>
        </div>
    </header>

    <!-- NAV MOVIL/TABLET -->
    <nav class="header_movil-nav">
        <ul>
            <!-- <li><a href="#home"><i class="las la-home"></i><span>Inicio</span></a></li> -->
            <li><a href="#aboutme"><img class="icon_nav" src="resources/img/iconos/me2.svg" alt=""><span>Sobre
                        mí</span></a></li>
            <li><a href="#proyects"><img class="icon_nav" src="resources/img/iconos/proyect2.svg"
                        alt=""><span>Proyectos</span></a></li>
            <li><a href="#serv"><img class="icon_nav" src="resources/img/iconos/serv2.svg"
                        alt=""><span>Servicios</span></a></li>
            <li><a href="#tech"><img class="icon_nav" src="resources/img/iconos/tecno2.svg"
                        alt="icono tecnologias"><span>Tecnologías</span></a></li>
            <li><a href="#contact"><img class="icon_nav" src="resources/img/iconos/mail2.svg"
                        alt="Icono contacto"><span>Contacto</span></a></li>
            <li><img class="icon_nav cerrar" src="resources/img/iconos/cerrar2.svg" alt="Icono cerrar"></li>
        </ul>

    </nav>

    <!-- CABECERA PC -->
    <header class="header_desktop">
        <div class="header_desktop-div">
            <div><a href="#home"><img id="logo-2" src="resources/img/logo/mo_cyan_f.png" alt="Logo de la web"
                        class="header_logo"></a>
            </div>
            <nav class="header_desktop-nav">
                <ul>
                    <!-- <li><a href="#home"><span class="desktop_nav_element">Inicio</span></a></li> -->
                    <li><a href="#aboutme"><span class="desktop_nav_element">Sobre mí</span></a></li>
                    <li><a href="#proyects"></i><span class="desktop_nav_element">Proyectos</span></a></li>
                    <li><a href="#serv"></i><span class="desktop_nav_element">Servicios</span></a></li>
                    <li><a href="#tech"><span class="desktop_nav_element">Tecnologías</span></a></li>
                </ul>
            </nav>
            <div class="header_desktop-btns">
                <label class="switch-name">
                    <input id="check2" type="checkbox" class="checkbox">
                    <div class="back"></div>
                    <svg class="moon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <path
                            d="M223.5 32C100 32 0 132.3 0 256S100 480 223.5 480c60.6 0 115.5-24.2 155.8-63.4c5-4.9 6.3-12.5 3.1-18.7s-10.1-9.7-17-8.5c-9.8 1.7-19.8 2.6-30.1 2.6c-96.9 0-175.5-78.8-175.5-176c0-65.8 36-123.1 89.3-153.3c6.1-3.5 9.2-10.5 7.7-17.3s-7.3-11.9-14.3-12.5c-6.3-.5-12.6-.8-19-.8z">
                        </path>
                    </svg>
                    <svg class="sun" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path
                            d="M361.5 1.2c5 2.1 8.6 6.6 9.6 11.9L391 121l107.9 19.8c5.3 1 9.8 4.6 11.9 9.6s1.5 10.7-1.6 15.2L446.9 256l62.3 90.3c3.1 4.5 3.7 10.2 1.6 15.2s-6.6 8.6-11.9 9.6L391 391 371.1 498.9c-1 5.3-4.6 9.8-9.6 11.9s-10.7 1.5-15.2-1.6L256 446.9l-90.3 62.3c-4.5 3.1-10.2 3.7-15.2 1.6s-8.6-6.6-9.6-11.9L121 391 13.1 371.1c-5.3-1-9.8-4.6-11.9-9.6s-1.5-10.7 1.6-15.2L65.1 256 2.8 165.7c-3.1-4.5-3.7-10.2-1.6-15.2s6.6-8.6 11.9-9.6L121 121 140.9 13.1c1-5.3 4.6-9.8 9.6-11.9s10.7-1.5 15.2 1.6L256 65.1 346.3 2.8c4.5-3.1 10.2-3.7 15.2-1.6zM160 256a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zm224 0a128 128 0 1 0 -256 0 128 128 0 1 0 256 0z">
                        </path>
                    </svg>
                </label>

                <a href="#contact"><button class="header_desktop_btn">Contacto</button></a>
            </div>
        </div>
    </header>

    <!-- CONTENEDOR PRINCIPAL -->
    <main class="main">
        <!-- SECCION INICIO -->
        <section class="home">
            <div class="section_cnt">
                <p class="greeting"><span id="span__cyan"><strong>¡</strong></span>Hola<span
                        id="span__cyan"><strong>!</strong></span></p>
                <h2 class="name">Soy Anthony Alegría</h2>
                <h1 class="profession">Desarrollador de aplicaciones web</h1>


                <div class="cnt__social--movil">
                    <a class="cnt__social--movil--icon"
                        href="https://www.linkedin.com/in/anthony-alegr%C3%ADa-alc%C3%A1ntara-58920a233/"
                        target="_blank"><i class="lab la-linkedin-in" title="linkedin"></i></a>
                    <a class="cnt__social--movil--icon" href="https://github.com/anthoox" target="_blank"><i
                            class=" lab la-github" title="github"></i></a>
                    <a class="cnt__social--movil--icon" href="https://codepen.io/anthoox" target="_blank"><i
                            class=" lab la-codepen" title="codepen"></i></a>
                </div>
                <a href="#contact"><button class="btn__contact">Trabajemos juntos</button></a>
            </div>

            <div class="cnt__photo">
                <a class="a__photo" href="#aboutme"><img class="cnt__photo--photo"
                        src="resources/img/foto/sin fond (3).png" alt="Fotografía del desarrollador"
                        title="anthoox"></a>
            </div>
        </section>

        <!-- SECCION SOBREMI -->
        <section class="sections" id="aboutme">
            <h3 class="h3__title ">Sobre mi</h3>
            <div class="cnt__aboutme section_cnt">
                <p class="aboutme__p ">
                    Mi viaje en el desarrollo web comenzó hace dos años de manera autodidacta. Aunque mi enfoque inicial
                    era el desarrollo <strong>frontend</strong>, mi formación académica me llevó a descubrir y
                    sorprenderme con el <strong>backend</strong>, especialmente a través de <strong>PHP</strong>.
                </p>
                <p class="aboutme__p highlight p_jump ">
                    A pesar de mi relativa inexperiencia, busco crear sitios web atractivos y funcionales.
                    Mi objetivo es seguir mejorando mis habilidades para satisfacer las necesidades de los usuarios.
                </p>
                <p class="aboutme__p  p_jump">
                    Este portfolio representa mi progreso y dedicación en el desarrollo web.
                </p>

                <p class="parrafo p_jump highlight">Puedes conocerme más por <a href="../proyects/CV/cv.html">aquí</a>
                </p>
            </div>
        </section>

        <!-- SECCIÓN PROYECTOS -->

        <section class="sections" id="proyects">
            <h3 class="h3__title">Proyectos</h3>
            <div class="cnt__proyects section_cnt">

                <!-- PROYECTOS -->
                <div class="card card-1">
                    <img class="card_img" src="resources/img/proyectos/Dado.png" alt="Aplicación Dados">
                    <div class="card__content">
                        <h4 class="card__title">Cubo 2D/3D</h4>
                        <p class="card__description">Aplicación interactiva que cambia un dado entre su
                            representación en 2D y 3D donde se trabaja con perspectiva y animaciones para hacerlo girar.
                        </p>
                        <div class="card_info">
                            <div>
                                <img class="card_icon" src="resources/img/iconos/html.svg" alt="icono de HTML5">
                                <img class="card_icon " src="resources/img/iconos/css.svg" alt="icono de CSS">
                                <img class="card_icon" src="resources/img/iconos/js.svg" alt="icono de JavaScript">
                            </div>
                            <div>
                                <a href="#" target="_blank">Visitar</a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card card-2">
                    <img class="card_img" src="resources/img/proyectos/flamencosevillaclass.png"
                        alt="Web flamencosevillaclass.es">
                    <div class="card__content">
                        <h4 class="card__title">FlamencoSevillaClass</h4>
                        <p class="card__description">Web de reservas de cursos y eventos de flamenco realizado en
                            WordPress donde se usan distintos plugins para su funcionamiento.</p>
                        <div class="card_info">
                            <div>
                                <img class="card_icon" src="resources/img/iconos/wordpress.svg" alt="icono de HTML5">
                            </div>
                            <div>
                                <a href="https://www.flamencosevillaclass.es/" target="_blank">Visitar</a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card card-3">
                    <img class="card_img" src="resources/img/proyectos/pkdex.png" alt="Imagen Pokédex">
                    <div class="card__content">
                        <h4 class="card__title">Pokédex</h4>
                        <p class="card__description">Pokédex interactiva. Conexión con la PokeAPI para obtener
                            los datos de los Pokémon.</p>
                        <div class="card_info">
                            <div>
                                <img class="card_icon" src="resources/img/iconos/html.svg" alt="icono de HTML5">
                                <img class="card_icon " src="resources/img/iconos/css.svg" alt="icono de CSS">
                                <img class="card_icon" src="resources/img/iconos/js.svg" alt="icono de JavaScript">
                            </div>
                            <div>
                                <a href="#" target="_blank">Visitar</a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card card-3">
                    <img class="card_img" src="resources/img/proyectos/miwiki.png" alt="Imagen web wiki">
                    <div class="card__content">
                        <h4 class="card__title">miWiki</h4>
                        <p class="card__description">Web guia HTML inspirada en Wikipedia. Segunda versión de un
                            proyecto de una web estilo wikipedia de Freecodecamp.</p>
                        <div class="card_info">
                            <div>
                                <img class="card_icon" src="resources/img/iconos/html.svg" alt="icono de HTML5">
                                <img class="card_icon " src="resources/img/iconos/css.svg" alt="icono de CSS">
                                <img class="card_icon" src="resources/img/iconos/js.svg" alt="icono de JavaScript">
                            </div>
                            <div>
                                <a href="#" target="_blank">Visitar</a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- SECCIÓN SERVICIOS -->
        <section class="sections" id="serv">
            <h3 class="h3__title">Servicios</h3>
            <div class="cnt_serv section_cnt">

                <div class="iconos_serv">
                    <div class="cnt__icon_serv">
                        <img class="icon__serv" src="resources/img/iconos/web2.svg" alt="icono de desarrollo web">
                        <span>Desarrollo Web</span>
                    </div>

                    <div class="cnt__icon_serv">
                        <img class="icon__serv  " src="resources/img/iconos/programar2.svg" alt="icono de programación">
                        <span>Programación</span>
                    </div>
                    <div class="cnt__icon_serv">
                        <img class="icon__serv" src="resources/img/iconos/disenio2.svg" alt="icono de diseño">
                        <span>Diseño</span>
                    </div>
                    <div class="cnt__icon_serv">
                        <img class=" icon__serv" src=" resources/img/iconos/pc2.svg" alt="icono de Microinfórmatica">
                        <span>Microinfórmatica</span>
                    </div>
                </div>

            </div>

        </section>

        <!-- SECCION TECNOLOGIAS -->
        <section class="sections" id="tech">
            <h3 class="h3__title">Tecnologías</h3>
            <div class="cnt_techno section_cnt">

                <div class="techno_row--icons">
                    <div class="cnt__icon_tech">
                        <img class="icon__tech " src="resources/img/iconos/html.svg" alt="icono de HTML5">
                        <span>HTML5</span>
                    </div>

                    <div class="cnt__icon_tech">
                        <img class="icon__tech  " src="resources/img/iconos/css.svg" alt="icono de CSS">
                        <span>CSS3</span>
                    </div>
                    <div class="cnt__icon_tech">
                        <img class="icon__tech " src="resources/img/iconos/js.svg" alt="icono de JavaScript">
                        <span>JavaScript</span>
                    </div>
                    <div class="cnt__icon_tech cnt__icon_tech">
                        <img class=" icon__tech " src=" resources/img/iconos/php.svg" alt="icono de PHP">
                        <span>PHP</span>
                    </div>
                    <div class="cnt__icon_tech cnt__icon_tech">
                        <img class=" icon__tech  " src=" resources/img/iconos/mysql.svg" alt="icono de MySQL">
                        <span>MySQL</span>
                    </div>
                    <div class="cnt__icon_tech">
                        <img class="icon__tech " src="resources/img/iconos/bootstap.svg" alt="icono de Bootstrap">
                        <span>Bootstrap</span>
                    </div>
                    <div class="cnt__icon_tech ">
                        <img class="icon__tech  " src="resources/img/iconos/wordpress.svg" alt="icono de WordPress">
                        <span>WordPress</span>
                    </div>
                    <div class="cnt__icon_tech">
                        <img class="icon__tech " src="resources/img/iconos/git.svg" alt="icono de Git">
                        <span>Git</span>
                    </div>
                </div>

            </div>

        </section>

        <!-- SECCION CONTACTO -->
        <section class="sections" id="contact">
            <h3 class="h3__title">Contacto</h3>
            <div class="cnt__form section_cnt">
                <p class="contact__p"><span id="span__cyan">¡</span>Hablemos<span id="span__cyan">!</span> Estoy a un
                    formulario de distancia.</p>
                <form class="form" action="index.php#contact" method="POST">
                    <div class="cnt__input cnt__input--1">

                        <input id="input_1" class="form__input" type="text" name="nombre" required>
                        <label class="form__label" for="nombre">Nombre</label>
                        <i></i>
                    </div>
                    <div class="cnt__input cnt__input--2">
                        <input id="input_2" class="form__input" type="text" name="email" required>
                        <label class="form__label" for="email">Email</label>
                        <i></i>
                    </div>
                    <div class="cnt__input cnt__input--3">
                        <input id="input_3" class="form__input" type="text" name="mensaje" required>
                        <label class="form__label" for="mensaje">Mensaje</label>

                        <i></i>
                    </div>
                    <div class="form__cnt__btn">
                        <input type="submit" class="form__btn--enviar" value="Enviar">
                    </div>

                </form>
                <div class="mensaje-email">
                    <?php
                        if(isset($resultado) && $resultado != false){
                            echo $resultado;
                        }                 
                    ?>
                </div>
            </div>
        </section>
        <a href="#home"><button class="btn__up "><i class="las la-angle-up"></i></i></button></a>
    </main>

    <!-- PIE DE PAGINA -->
    <footer>
        <div><img id="logo-3" class="footer__logo" src="resources/img/logo/mo_logo_cyan_f2.png" alt="Logo web"></div>
        <p class="copy">anthoox &#169 2023 </p>
        <p>Recursos de: <a href="https://yesicon.app/">yesicon</a>, <a href="https://getcssscan.com/">getcssscan</a> y
            <a href="https://uiverse.io/">uiverse</a>
        </p>

    </footer>
</body>

</html>