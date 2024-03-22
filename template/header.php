<?php $url_base= "http://localhost/crudphp"; ?>

<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="images/CRUDIMG.png" type="image/x-icon">
    <img src="" alt="">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>
<body>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <ul class="nav navbar-nav"> 
            <!-- Elemento de menú para el título principal de la aplicación -->
            <li class="nav-item">
                <!-- Botón que enlaza a la página principal -->
                <a class="nav-link active" href="<?php echo $url_base; ?>">CRUD PHP</a>
            </li>
            <!-- Elemento de menú para los contactos -->
            <li class="nav-item">
                <!-- Enlace al módulo de contactos -->
                <a class="nav-link" href="<?php echo $url_base; ?>/modulos/contactos/">Contactos</a>
            </li>
        </ul>
    </nav>

    <main class="container">
        <br><br>
        <!-- Contenido principal de la página -->
