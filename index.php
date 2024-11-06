<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Portafolio</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Header -->
    <header>
        <h1>Mi Portafolio</h1>
        <nav>
            <a href="#about">Acerca de mí</a>
            <a href="#skills">Habilidades</a>
            <a href="#projects">Proyectos</a>
            <a href="#contact">Contacto</a>
        </nav>
    </header>

    <!-- Acerca de mí -->
    <section id="about">
        <h2>Acerca de mí</h2>
        <p>Hola, soy un desarrollador junior especializado en PHP, HTML, y CSS. Me apasiona la tecnología y crear aplicaciones web funcionales y estéticas.</p>
    </section>

    <!-- Habilidades -->
    <section id="skills">
        <h2>Habilidades</h2>
        <ul>
            <li>PHP</li>
            <li>HTML y CSS</li>
            <li>JavaScript</li>
            <li>MySQL</li>
            <li>Git y GitHub</li>
        </ul>
    </section>

    <!-- Proyectos -->
    <section id="projects">
        <h2>Proyectos</h2>
        <div class="project">
            <img src="images/proyecto1.jpg" alt="Proyecto 1">
            <h3>Proyecto 1</h3>
            <p>Descripción del proyecto 1. Explica las tecnologías usadas y el propósito.</p>
        </div>
        <div class="project">
            <img src="images/proyecto2.jpg" alt="Proyecto 2">
            <h3>Proyecto 2</h3>
            <p>Descripción del proyecto 2. Explica las tecnologías usadas y el propósito.</p>
        </div>
        <!-- Agrega más proyectos según sea necesario -->
    </section>

    <!-- Contacto -->
    <section id="contact">
        <h2>Contacto</h2>
        <form action="contact_form.php" method="post">
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Correo:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Mensaje:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Enviar</button>
        </form>
    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Mi Portafolio</p>
    </footer>
</body>
</html>
