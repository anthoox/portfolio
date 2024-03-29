<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'utils/PHPMailer/Exception.php';
require 'utils/PHPMailer/PHPMailer.php';
require 'utils/PHPMailer/SMTP.php';

// Cargamos los datos tras pasarlos por el validador
require_once 'utils/validador.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

if ($error == false) {
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
        $mail->addAddress('anthoox@anthoox.es', 'Anthony Alegría');     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Email de contacto web';
        $mail->Body    = '<p>Mensaje enviado desde web:  <b>anthoox.es</b></p>'
            . "<b>Nombre</b>: " . $datosForm['nombre'] . "<br>"
            . "<b>Email</b>: " . $datosForm['email'] . "<br>"
            . "<b>Mensaje</b>: " . $datosForm['mensaje'] . "<br>";

        $mail->send();

        $resultado = '<p class="email">Mensaje enviado</p>';
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
    <meta name="description" content="Web portfolio">
    <title>anthoox</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;400;500&family=Nunito:wght@300;400&family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/animations.css">
    <link rel="shortcut icon" href="assets/img/logo/icoLogo.ico" />
    <meta name="robots" content="index, follow">
    <script src="assets/js/code.js"></script>
</head>

<body id="home">

    <!-- HEADER -->
    <header>
        <div class="header bg-trans">
            <a href="#home"><img id="logo-1" src="assets/img/logo/mo_cyan_f.png" alt="Logo de la web" class="header-logo"></a>

            <nav class="nav-menu">
                <ul>
                    <li><a href="#aboutme">Sobre mí</a></li>
                    <li><a href="#proyects">Proyectos</a></li>
                    <li><a href="#tech">Tecnologías</a></li>
                </ul>
            </nav>

            <div class="header-btns">
                <label class="switch-name" for="check1">
                    <input id="check1" type="checkbox" class="checkbox" name="check1">
                    <div class="back"></div>
                    <svg class="moon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <path d="M223.5 32C100 32 0 132.3 0 256S100 480 223.5 480c60.6 0 115.5-24.2 155.8-63.4c5-4.9 6.3-12.5 3.1-18.7s-10.1-9.7-17-8.5c-9.8 1.7-19.8 2.6-30.1 2.6c-96.9 0-175.5-78.8-175.5-176c0-65.8 36-123.1 89.3-153.3c6.1-3.5 9.2-10.5 7.7-17.3s-7.3-11.9-14.3-12.5c-6.3-.5-12.6-.8-19-.8z">
                        </path>
                    </svg>
                    <svg class="sun" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M361.5 1.2c5 2.1 8.6 6.6 9.6 11.9L391 121l107.9 19.8c5.3 1 9.8 4.6 11.9 9.6s1.5 10.7-1.6 15.2L446.9 256l62.3 90.3c3.1 4.5 3.7 10.2 1.6 15.2s-6.6 8.6-11.9 9.6L391 391 371.1 498.9c-1 5.3-4.6 9.8-9.6 11.9s-10.7 1.5-15.2-1.6L256 446.9l-90.3 62.3c-4.5 3.1-10.2 3.7-15.2 1.6s-8.6-6.6-9.6-11.9L121 391 13.1 371.1c-5.3-1-9.8-4.6-11.9-9.6s-1.5-10.7 1.6-15.2L65.1 256 2.8 165.7c-3.1-4.5-3.7-10.2-1.6-15.2s6.6-8.6 11.9-9.6L121 121 140.9 13.1c1-5.3 4.6-9.8 9.6-11.9s10.7-1.5 15.2 1.6L256 65.1 346.3 2.8c4.5-3.1 10.2-3.7 15.2-1.6zM160 256a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zm224 0a128 128 0 1 0 -256 0 128 128 0 1 0 256 0z">
                        </path>
                    </svg>
                </label>
                <img class="icon icon-nav icon-menu" src="assets/img/iconos/menu2.svg" alt="Icono menú">
                <img class="icon icon-nav icon-cerrar" src="assets/img/iconos/cerrar2.svg" alt="Icono cerrar">

                <a class="cnt-btn" aria-label="botón contacto" href="#contact"><button class="btn-contact">Contacto</button></a>
            </div>
        </div>
    </header>

    <!-- NAV MOVIL/TABLET -->
    <nav class="nav">
        <ul>
            <li><a href="#aboutme"><img class="icon icon-nav" src="assets/img/iconos/perfil2.svg" alt=""><span>Sobre
                        mí</span></a></li>
            <li><a href="#proyects"><img class="icon icon-nav" src="assets/img/iconos/proyect2.svg" alt=""><span>Proyectos</span></a></li>
            <li><a href="#tech"><img class="icon icon-nav" src="assets/img/iconos/tecno2.svg" alt="icono tecnologias"><span>Tecnologías</span></a></li>
            <li><a href="#contact"><img class="icon icon-nav" src="assets/img/iconos/mail2.svg" alt="Icono contacto"><span>Contacto</span></a></li>
        </ul>

    </nav>

    <!-- MAIN -->
    <main>

        <!-- HOME -->
        <section class="">
            <div class="content">
                <div class="content-intro">
                    <div class="content-data">
                        <p><span class="cyan hello"><strong>¡</strong></span><span class="hello">Hola</span><span class="cyan hello"><strong>!</strong></span>
                        </p>
                        <h2 class="name">Soy Anthony Alegría</h2>
                        <h1 class="profession">Desarrollador de aplicaciones web</h1>

                        <div class="cnt">
                            <div class="content-data-social">
                                <a class="icon-social" href="https://www.linkedin.com/in/anthony-alegr%C3%ADa-alc%C3%A1ntara-58920a233/" target="_blank"><i class="lab la-linkedin-in" title="linkedin"></i></a>
                                <a class="icon-social" href="https://github.com/anthoox" target="_blank"><i class=" lab la-github" title="github"></i></a>
                                <a class="icon-social" href="https://codepen.io/anthoox" target="_blank"><i class=" lab la-codepen" title="codepen"></i></a>
                                <a class="icon-social" href="mailto:anthony@anthoox.es" target="_blank"><i class="las la-at" title="anthony@anthoox.es"></i></a>
                            </div>

                            <a href="assets/resources/cv_anthony_alegria.pdf" download="cv_anthony_alegria.pdf"><button class="cv">Descargar CV</button></a>
                        </div>
                    </div>

                    <div class="content-photo">
                        <a class="a__photo" href="#aboutme"><img class="photo" src="assets/img/foto/me.png" alt="Fotografía del desarrollador" title="Anthony Alegría Alcántara"></a>
                    </div>
                </div>

            </div>
        </section>

        <!-- SOBRE MI -->
        <section class="section-animation" id="aboutme">
            <div class="content ">
                <h2 class="title">Sobre mi</h2>
                <div class="content_in ">
                    <p class="p ">
                        Mi viaje en el desarrollo web comenzó hace dos años de manera autodidacta. Mas adelante accedi al grado superior para obtener mi titulación oficial y aunque mi enfoque inicial era el desarrollo <strong>frontend</strong>, me sorprendi trabajando en el lado
                        del <strong>backend</strong>, con <strong>PHP</strong>.
                    </p>
                    <p class="p jump highlight  ">
                        Mi objetivo es crear sitios web <strong class="light">atractivos</strong> y <strong class="light">accesibles</strong> que satisfagan
                        las necesidades de los usuarios.
                    </p>

                    <p class="p jump ">Puedes conocer más mi expriencia laboral por <a target="_blank" href="websites/laboral/index.html" class="cyan" title="Ver más">aquí</a>.
                    </p>
                </div>
            </div>
        </section>

        <!-- PROYECTOS -->
        <section class="section-animation" id="proyects">
            <div class="content">
                <h2 class="title">Proyectos</h2>
                <div class="content_in cnt-center mt">

                    <!-- PROYECTOS -->
                    <div class="card ">
                        <img class="card_img" src="assets/img/proyectos/dado.png" alt="Web Dados">
                        <div class="card__content">
                            <h3 class="card__title">Cubo 2D/3D</h3>
                            <p class="card__description">Dado interactivo con versión en 2D y 3D. Uso de perspectiva y
                                animaciones.
                            </p>
                            <div class="card_info">
                                <div class="cnt-card_icon">
                                    <img class="card_icon" src="assets/img/iconos/html.svg" alt="icono de HTML5">
                                    <img class="card_icon " src="assets/img/iconos/css.svg" alt="icono de CSS">
                                    <img class="card_icon" src="assets/img/iconos/js.svg" alt="icono de JavaScript">
                                </div>
                                <div class="cnt-card_icon">
                                    <a href="websites/dados/index.html" target="_blank"><img class="icon icon-nav card_icon" src="assets/img/iconos/w2.svg" alt="icono de web" title="Visitar"></a>

                                    <a href="https://github.com/anthoox/dados" target="_blank">
                                        <img class="icon icon-nav card_icon" src="assets/img/iconos/gh2.svg" alt="icono de github" title="GitHub">
                                    </a>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card ">
                        <img class="card_img" src="assets/img/proyectos/fsc.png" alt="Web flamencosevillaclass.es">
                        <div class="card__content">
                            <h4 class="card__title">Flamenco Sevilla Class</h4>
                            <p class="card__description">Web de reservas de cursos y eventos de flamenco realizado en
                                WordPress.</p>
                            <div class="card_info">
                                <div class="cnt-card_icon">
                                    <img class=" card_icon" src="assets/img/iconos/wordpress.svg" alt="icono de HTML5">
                                </div>
                                <div class="cnt-card_icon">
                                    <a href="https://www.flamencosevillaclass.es/" target="_blank"><img class="icon icon-nav card_icon" src="assets/img/iconos/w2.svg" alt="icono de web" title="Visitar"></a>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card ">
                        <img class="card_img" src="assets/img/proyectos/pkdex.png" alt="Imagen Pokédex">
                        <div class="card__content">
                            <h3 class="card__title">Pokédex</h3>
                            <p class="card__description">Pokédex interactiva. Conexión con la PokeAPI para obtener
                                los datos de los Pokémon.</p>
                            <div class="card_info">
                                <div class="cnt-card_icon">
                                    <img class="card_icon" src="assets/img/iconos/html.svg" alt="icono de HTML5">
                                    <img class="card_icon " src="assets/img/iconos/css.svg" alt="icono de CSS">
                                    <img class="card_icon" src="assets/img/iconos/js.svg" alt="icono de JavaScript">
                                </div>
                                <div class="cnt-card_icon">
                                    <a href="websites/pokedex/index.html" target="_blank"><img class="icon icon-nav card_icon" src="assets/img/iconos/w2.svg" alt="icono de web" title="Visitar"></a>

                                    <a href="https://github.com/anthoox/pokedex" target="_blank">
                                        <img class="icon icon-nav card_icon" src="assets/img/iconos/gh2.svg" alt="icono de github" title="GitHub">
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <img class="card_img" src="assets/img/proyectos/miwiki.png" alt="Imagen web wiki">
                        <div class="card__content">
                            <h3 class="card__title">miWiki</h3>
                            <p class="card__description">Web guia HTML inspirada en Wikipedia. Segunda versión de un
                                proyecto de Freecodecamp.</p>
                            <div class="card_info">
                                <div class="cnt-card_icon">
                                    <img class="card_icon" src="assets/img/iconos/html.svg" alt="icono de HTML5">
                                    <img class="card_icon " src="assets/img/iconos/css.svg" alt="icono de CSS">
                                    <img class="card_icon" src="assets/img/iconos/js.svg" alt="icono de JavaScript">
                                </div>
                                <div class="cnt-card_icon">
                                    <a href="websites/miWiki/index.html" target="_blank"><img class="icon icon-nav card_icon" src="assets/img/iconos/w2.svg" alt="icono de web" title="Visitar"></a>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- TECNOLOGIAS -->
        <section class="section-animation" id="tech">
            <div class="content">
                <h2 class="title">Tecnologías</h2>
                <div class="content_in">
                    <div class="branch">
                        <h6>Frontend</h6>
                        <div class="branch-tech">
                            <div class="tech">
                                <img class="icon  icon-animation " src="assets/img/iconos/html.svg" title="HTML5" alt="icono de HTML5">

                            </div>

                            <div class="tech">
                                <img class="icon  icon-animation " src="assets/img/iconos/css.svg" title="CSS3" alt="icono de CSS">

                            </div>

                            <div class="tech">
                                <img class="icon  icon-animation" src="assets/img/iconos/js.svg" title="JavaScript" alt="icono de JavaScript">

                            </div>
                        </div>
                    </div>
                    <div class="branch">
                        <h6 class="p-jump">Backend</h6>
                        <div class="branch-tech">
                            <div class="tech ">
                                <img class=" icon icon-animation" src=" assets/img/iconos/php.svg" title="PHP" alt="icono de PHP">

                            </div>
                            <div class="tech ">
                                <img class=" icon  icon-animation" src=" assets/img/iconos/mysql.svg" title="SQL" alt="icono de MySQL">

                            </div>
                        </div>
                    </div>
                    <div class="branch">
                        <h6 class="p-jump">Herramientas</h6>
                        <div class="branch-tech ">
                            <div class="tech">
                                <img class="icon icon-animation" src="assets/img/iconos/bootstap.svg" title="Bootstrap" alt="icono de Bootstrap">

                            </div>
                            <div class="tech ">
                                <img class="icon  icon-animation" src="assets/img/iconos/wordpress.svg" title="WordPress" alt="icono de WordPress">

                            </div>
                            <div class="tech">
                                <img class="icon icon-animation" src="assets/img/iconos/git.svg" title="Git" alt="icono de Git">

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- CONTACTO -->
        <section class="section-animation" id="contact">
            <div class="content">
                <h2 class="title">Contacto</h2>
                <div class="content_in">
                    <p class="p center"><span class="cyan">¡</span>Hablemos<span class="cyan">!</span> Estoy
                        a
                        un
                        formulario de distancia.</p>
                    <form class="form " action="index.php#contact" method="POST">
                        <div class="cnt__input cnt__input--1">

                            <input id="nombre" class="form__input" type="text" name="nombre" required>
                            <label class="form__label" for="nombre">Nombre</label>
                            <i></i>
                        </div>
                        <div class="cnt__input cnt__input--2">
                            <input id="email" class="form__input" type="text" name="email" required>
                            <label class="form__label" for="email">Email</label>
                            <i></i>
                        </div>
                        <div class="cnt__input cnt__input--3">
                            <input id="mensaje" class="form__input" type="text" name="mensaje" required>
                            <label class="form__label" for="mensaje">Mensaje</label>

                            <i></i>
                        </div>
                        <div class="form__cnt__btn">
                            <input type="submit" class="form__btn--enviar" value="Enviar">
                        </div>

                    </form>

                </div>
            </div>
        </section>

        <!-- MENSAJE FLOTANTE -->
        <div class="mensaje-email">

            <?php
            if (isset($resultado) && $resultado != false) {
                echo $resultado;
            }
            ?>

        </div>

        <!-- BOTÓN UP -->
        <a href="#home" aria-label="Ir al principio"><button name="subir" class="btn-up "><i class="las la-angle-up"></i></i></button></a>

        <!-- ICONO SCROLL -->
        <div class=" cnt-arrow">

            <div class="tooltiptext">Scroll</div>
            <img class="icon-nav icon-arrow" src="assets/img/iconos/flecha2.svg" alt="">
        </div>

    </main>

    <!-- FOOTER -->
    <footer class="jump  ">
        <div class="cnt-footer ">
            <div class=" jump">
                <img id="logo-3" src="assets/img/logo/logoWeb.svg" alt="Logo web">
            </div>
            <p class="highlight">Recursos de: <a class="blur" href="https://yes
                icon.app/">yesicon</a>, <a class="blur" href="https://getcssscan.com/">getcssscan</a> y
                <a class="blur" href="https://uiverse.io/">uiverse</a>
            </p>
            <div class="social-footer jump">
                <div class="cnt-social-footer">
                    <span class="highlight">&#169 2024</span>

                    <a class="highlight" href="mailto:anthony@anthoox.es">anthony@anthoox.es</a>
                    <div class="social">
                        <a class="highlight icon-social" href="https://www.linkedin.com/in/anthony-alegr%C3%ADa-alc%C3%A1ntara-58920a233/" target="_blank"><i class="lab la-linkedin-in" title="linkedin"></i></a>
                        <a class="highlight icon-social" href="https://github.com/anthoox" target="_blank"><i class=" lab la-github" title="github"></i></a>
                        <a class="highlight icon-social" href="https://codepen.io/anthoox" target="_blank"><i class=" lab la-codepen" title="codepen"></i></a>
                    </div>
                </div>

            </div>
        </div>

    </footer>

</body>

</html>