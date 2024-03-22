<?php 
// Comprueba si se ha enviado algún dato mediante el método POST
if ($_POST) {
    // Obtiene los valores del formulario o establece valores predeterminados si no se proporcionan
    $nombre = (isset($_POST["nombre"]) ? $_POST["nombre"] : "");
    $apellidos = (isset($_POST["apellidos"]) ? $_POST["apellidos"] : "");
    $telefono = (isset($_POST["telefono"]) ? $_POST["telefono"] : "");
    $fecha = (isset($_POST["fecha"]) ? $_POST["fecha"] : "");

    // Prepara una consulta para insertar los datos del contacto en la base de datos
    $stm = $conexion->prepare("INSERT INTO contactos(id, nombre, apellidos, telefono, fecha) VALUES(null, :nombre,:apellidos,:telefono,:fecha)");

    // Vincula los parámetros de la consulta preparada con los valores obtenidos del formulario
    $stm->bindParam(":nombre", $nombre);
    $stm->bindParam(":apellidos", $apellidos);
    $stm->bindParam(":telefono", $telefono);
    $stm->bindParam(":fecha", $fecha);
    
    // Ejecuta la consulta preparada para insertar los datos del contacto en la base de datos
    $stm->execute();

    // Redirige al usuario a la página principal después de agregar el contacto
    header("Location: index.php");
}
?>

<!-- Modal create-->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- Título del modal -->
                <h5 class="modal-title" id="exampleModalLabel">Agregar Contacto</h5>
                <!-- Botón para cerrar el modal -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Formulario para agregar un nuevo contacto -->
            <form action="" method="post" >
                <div class="modal-body">
                    <!-- Campo de entrada para el nombre -->
                    <label for="">Nombres</label>
                    <input type="text" class="form-control" name="nombre" value="" placeholder="Ingresar Nombre(s)" required>
                    <!-- Campo de entrada para los apellidos -->
                    <label for="">Apellidos</label>
                    <input type="text" class="form-control" name="apellidos" value="" placeholder="Ingresar Apellido(s)" required>
                    <!-- Campo de entrada para el teléfono -->
                    <label for="">Telefono</label>
                    <input type="text" class="form-control" name="telefono" value="" placeholder="Telefono" minlength="10" maxlength="10" required>
                    <!-- Campo de entrada para la fecha -->
                    <label for="">Fecha</label>
                    <input type="date" class="form-control" name="fecha" value="" placeholder="Fecha" required>
                </div>
                <div class="modal-footer">
                    <!-- Botón para cerrar el modal -->
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <!-- Botón para enviar el formulario y guardar el contacto -->
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>
