<?php
session_start();
if (empty($_SESSION["id"])) {
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="shortcut icon" href="image/icon.png" type="image/x-icon">

    <title>Curriculum - Mohamed Reda El Majzoub</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #001f3f;
            /* Azul marino */
            color: #333;
        }

        .content-section {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-bottom: 30px;
        }

        .profile-img {
            width: 200px;
            height: auto;
            border-radius: 8px;
            border: 3px solid #001f3f;
        }

        .nav-custom {
            background-color: #001f3f;
        }

        .nav-custom .navbar-brand,
        .nav-custom .nav-link {
            color: white !important;
        }

        footer {
            background-color: #001f3f;
            color: white;
            padding: 20px 0;
        }

        .pdf-link {
            color: #001f3f;
            font-weight: bold;
            text-decoration: none;
        }

        .pdf-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg nav-custom">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Curriculum</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#about">Sobre mí</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#experience">Experiencia</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#education">Educación</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contacto</a>
                        </li>
                    </ul>
                    <!-- Botón de cerrar sesión -->
                    <div class="d-flex">
                        <a href="logout.php" class="btn btn-danger">Cerrar sesión</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="container my-5">
        <!-- Sección de presentación -->
        <section id="presentation" class="content-section">
            <div class="row align-items-center">
                <div class="col-md-4 text-center">
                    <img src="image/ci.jpg" alt="Foto de perfil" class="profile-img">
                </div>
                <div class="col-md-8">
                    <h1>Mohamed Reda El Majzoub</h1>
                    <p class="lead">hola buenas , soy Mohamed estudiante de ing de sistemas , responsable y cuidadoso con sus trabajos y atento en los detalles</p>
                </div>
            </div>
        </section>

        <!-- Sección sobre mí -->
        <section id="about" class="content-section">
            <h2><i class="fas fa-user me-2"></i>Sobre mí</h2>
            <div class="divisor bg-primary mb-4" style="height: 3px; width: 100px;"></div>
            <p> Un chico que hace lo que sea para que todo salga bien me encanta aprender de todo ,me necantan los video juegos y programar , aprendeo rapido y mejoro lo aprendido</p>
        </section>

        <!-- Sección de experiencia -->
        <section id="experience" class="content-section">
            <h2><i class="fas fa-briefcase me-2"></i>Experiencia Laboral</h2>
            <div class="divisor bg-primary mb-4" style="height: 3px; width: 100px;"></div>

            <div class="mb-4">
                <h4>Mundo escolar</h4>
                <p class="text-muted">26-agosto-2023 al 15-septiembre-2023</p>
                <p>trabajo almacenista , organizacion de productos, cuidado de mercancia y extraccion de esta, atencion al cliente y seguridad</p>
            </div>

            <div>
                <h4>Mercado vida</h4>
                <p class="text-muted">5-Febrero-2024 al 7-octubre-2024</p>
                <p>trabajo Gerente de almacen/SUB-Gerente de tienda ,cuidado de mercancia , traslado de almacen a tiendas , apertura de tienda , inventario , conociemientos adquiridos en charcuteria,seguridad ,grannel y caja </p>
            </div>

            <div>
                <h4>Mercado vida san juan</h4>
                <p class="text-muted">5-diciembre-2024 al 14-febrero-2025</p>
                <p>trabajo soporte tecnico , mantenimiento y cuidado de los equipos y de la base de datos</p>
            </div>

            <div>
                <h4>lider price/ronix</h4>
                <p class="text-muted">26-marzo-2025 actualmente</p>
                <p>trabajo: inventario </p>
            </div>
        </section>

        <!-- Sección de educación -->
        <section id="education" class="content-section">
            <h2><i class="fas fa-graduation-cap me-2"></i>Educación</h2>
            <div class="divisor bg-primary mb-4" style="height: 3px; width: 100px;"></div>

            <div class="mb-4">
                <h4>Colegio islamico </h4>
                <p class="text-muted">2010 al 2022</p>
                <p>Estando desde prescolar hasta graduarme en la secundaria, 5to lugar en mi clase</p>
            </div>

            <div>
                <h4>Universidad: Unimar</h4>
                <p class="text-muted">2022 actualmente</p>
                <p>estudiando ingenieria en sistemas apenas sali de la escuela</p>
            </div>
        </section>

        <!-- Enlace al PDF -->
        <section class="content-section text-center">
            <h3>Descarga mi curriculum completo</h3>
            <a href="https://drive.google.com/file/d/1yt11I3t6nxGbR96YkjvaQZ0zTwBfzgFe/view?usp=sharing" class="pdf-link" target="_blank">
                <i class="fas fa-file-pdf me-2"></i>Curriculum PDF
            </a>
        </section>
    </main>

    <footer class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h5>Contacto</h5>
                    <p>gmail:mel_majzoub.5808@unimar.edu.ve</p>
                </div>
                <div class="col-md-4 mb-3">
                    <h5>Redes Sociales</h5>
                    <a href="https://www.instagram.com/reda_elmaj_?igsh=Nmp1NHNnbjZzamVl" class="text-white mx-2" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
                    <a href="https://github.com/medred123xd" class="text-white mx-2" target="_blank"><i class="fab fa-github fa-2x"></i></a>
                    <a href="https://www.facebook.com/share/16Phr1NGiw/" class="text-white mx-2" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
                </div>
                <div class="col-md-4">
                    <h5>Derechos</h5>
                    <p>&copy; 2025 Mohamed Reda El Majzoub</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous">
    </script>
    <div class="container my-5">
        <h3 class="text-white">Deja un comentario</h3>
        <form method="POST" action="procesar_comentario.php">
            <input type="hidden" name="nombre" value="<?= $_SESSION['nombre'] ?>">
            <input type="hidden" name="correo" value="<?= $_SESSION['correo'] ?>">
            <textarea name="nota" class="form-control mb-2" placeholder="Escribe tu comentario..." required></textarea>
            <button class="btn btn-light">Enviar</button>
        </form>
    </div>

    <?php
    include "model/conn.php";
    $sql = "SELECT * FROM comentarios ORDER BY fecha DESC";
    $res = $conn->query($sql);
    while ($row = $res->fetch_assoc()): ?>
        <div class="container bg-white p-3 my-3 rounded">
            <strong><?= htmlspecialchars($row['nombre']) ?> (<?= htmlspecialchars($row['correo']) ?>)</strong><br>
            <small><?= $row['fecha'] ?></small>
            <p><?= htmlspecialchars($row['nota']) ?></p>
        </div>
    <?php endwhile; ?>

</body>

</html>