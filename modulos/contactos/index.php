<?php 
// Incluir el archivo de conexión a la base de datos
include("../../conexion.php");

// Intentar seleccionar la base de datos
$conexion->query("USE phpcrud");

// Preparar y ejecutar una consulta para obtener todos los contactos
$stm = $conexion->prepare('SELECT * FROM contactos');
$stm->execute();
$contactos = $stm->fetchAll(PDO::FETCH_ASSOC);

// Si se recibe el parámetro 'id' a través de GET, se elimina el contacto correspondiente
if (isset($_GET['id'])) {
    $txtid = isset($_GET['id']) ? $_GET['id'] : '';
    $stm = $conexion->prepare('DELETE FROM contactos WHERE id = :txtid');
    $stm->bindValue(':txtid', $txtid);
    $stm->execute();
    // Redirigir a la página principal después de eliminar el contacto
    header('Location: index.php');
}
?>

<?php include('../../template/header.php'); ?>

<!-- Botón para mostrar el modal de creación de nuevo contacto -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#create">
  Nuevo
</button>

<div class="table-responsive">
    <table class="table">
        <thead class="table table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Telefono</th>
                <th scope="col">Fecha</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contactos as $contacto) { ?>
            <tr>
                <td><?php echo $contacto['id']; ?></td>
                <td><?php echo $contacto['nombre']; ?></td>
                <td><?php echo $contacto['apellidos']; ?></td>
                <td><?php echo $contacto['telefono']; ?></td>
                <td><?php echo $contacto['fecha']; ?></td>
                <td>
                    <!-- Enlace para editar el contacto -->
                    <a href="edit.php?id=<?php echo $contacto['id']; ?>" class="btn btn-warning">Editar</a>
                    <!-- Enlace para eliminar el contacto -->
                    <a href="index.php?id=<?php echo $contacto['id']; ?>" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
            <?php  };  ?>
        </tbody>
    </table>
</div>

<?php include('./create.php'); ?>

<?php include('../../template/footer.php'); ?>