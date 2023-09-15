<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>anthoox</title>
    <link rel="stylesheet" href="/resources/css/style.css">
</head>

<body>

    <head>
        <div>logo</div>
        <nav>
            <ul>
                <li><a href="#home">Inicio</a></li>
                <li><a href="#aboutme">Sobre mi</a></li>
                <li><a href="#proyects">Proyectos</a></li>
                <li><a href="#tech">Tecnologías</a></li>
            </ul>
        </nav>
        <div>
            <button><a href="contactme">Contacto</a></button>
            <!-- <button>día/noche</button> -->
        </div>

    </head>
    <main>
        <!-- sección de inicio -->
        <section id="home">
            <div>
                <p>¡Hola!</p>
                <h1>Soy Anthony Alegría</h1>
                <p>Desarrollador de aplicaciones web</p>
                <button>Contactame</button>
            </div>
            <div>
                <img src="" alt="mi foto">
                <div>
                    <a href="">LinkedIn</a>
                    <a href="">GitHub</a>
                    <a href="">email</a>
                </div>
            </div>

        </section>
        <!-- sección sobre mí -->
        <section id="aboutme">
            <!-- Pequeña biografía, como una reseña. Me llamo tal soy tal me gusta esto he trabajado en esto y me destaco en esto. 8 o 10 líneas -->
            <h3>Sobre mi</h3>
            <p>Soy un desarrollador de aplicaciones web titulado en 2023. Mi enfoque se centra en la creación de
                experiencias de usuario excepcionales y aplicaciones funcionales que aporten valor a las personas. He
                trabajado en una variedad de proyectos emocionantes y estoy siempre listo para el próximo desafío.
                ¡Gracias por visitar mi portfolio y espero que disfrutes explorando mi trabajo!</p>
            <!-- En un futuro añadir un apartado de conoceme más dando enlaces a Notion donde se muestre más información sobre mí -->
            <p>Puedes conocerme más <a href="#">aquí</a>...</p>
        </section>
        <!-- sección de tecnologías que conozco -->
        <section id="tech">
            <!-- Iconos de las tecnologias que conozco HTML5, CSS, PHP, JavaScript, Bootstrap, MySQL, WordPress, VSCode, Git -->
            <h3>Tecnologías</h3>
            <div>
                <!-- iconos -->
            </div>
        </section>
        <!-- sección de proyectos -->
        <section id="proyects">
            <!-- Marco de proyectos usando el estilo bento columns. Empezaré poniendo imágenes de los proyectos de codepen hasta que los tenga en mi propio dominio. Aquí incluire mi CV -->
            <h3>Proyectos</h3>
            <div>
                <!-- proyectos -->
            </div>
        </section>
        <!-- sección de contacto -->
        <section id="contactme">
            <!-- Sección de contacto con un breve formulario que pida nombre, email y comentarios -->
            <form action="">
                <div>
                    <label for="name">Nombre</label><br>
                    <input type="text" name="name" placeholder="Nombre" required>
                </div>
                <div>
                    <label for="name">Email</label><br>
                    <input type="text" name="email" placeholder="ejemplo@ejemplo.com" required>
                </div>
                <div>
                    <label for="notes">Consulta</label><br>
                    <textarea name="notes" id="" cols="30" rows="10" placeholder="Escribe aquí tu consulta"></textarea>
                </div>
                <button>Enviar</button>
            </form>
        </section>
        <button>subir</button>
    </main>
    <footer>
        <div>
            <ul>
                <li>Aviso legal</li>
                <li>Política de cookies</li>
                <li>Política de privacidad</li>
                <li>Preferencias de cookies</li>
            </ul>
        </div>
        <div>
            <p>&#169 Anthony Alegría 2023</p>
        </div>
    </footer>
</body>

</html>