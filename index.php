
<?php $url_base= "http://localhost/crudphp"; ?>

<!doctype html>
<html lang="en">
<head>
    <title>CRUD | Create, Read, Update, Delete</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>
<body>

<!-- Para incluir el encabezado de la página -->
<?php include('template/header.php'); ?> 

<!-- Contenido principal -->
<div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Esto es un CRUD</h1>
        <p class="col-md-8 fs-4">
            Es un sistema de gestión de datos que te permite crear, leer, actualizar y eliminar registros.
            Utiliza las opciones del menú de navegación para acceder a diferentes secciones y realizar operaciones en la base de datos.
        </p>
        <a class="btn btn-primary btn-lg" href="<?php echo $url_base; ?>/modulos/contactos/" role="button">Ir a Contactos</a>
    </div>
</div>

<!-- Para incluir el pie de página -->
<?php include('template/footer.php'); ?> 

</body>
</html>
