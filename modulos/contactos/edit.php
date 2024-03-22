<?php include("../../conexion.php");

$conexion->query("USE phpcrud");


if (isset($_GET['id'])) {
    $txtid = isset($_GET['id']) ? $_GET['id'] : '';
    $stm = $conexion->prepare('SELECT * FROM contactos WHERE id = :txtid');
    $stm->bindValue(':txtid', $txtid);
    $stm->execute();
    $registro=$stm->fetch(PDO::FETCH_LAZY);
    $nombre=$registro['nombre'];
    $apellidos=$registro['apellidos'];
    $telefono=$registro['telefono'];
    $fecha=$registro['fecha'];
}

if ($_POST) {
    $txtid = isset($_POST["txtid"]) ? $_POST["txtid"] : "";
    $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
    $apellidos = isset($_POST["apellidos"]) ? $_POST["apellidos"] : "";
    $telefono = isset($_POST["telefono"]) ? $_POST["telefono"] : "";
    $fecha = isset($_POST["fecha"]) ? $_POST["fecha"] : "";

    $stm = $conexion->prepare("UPDATE contactos SET nombre=:nombre, apellidos=:apellidos, telefono=:telefono, fecha=:fecha WHERE id=:txtid");

    $stm->bindParam(":txtid", $txtid);
    $stm->bindParam(":nombre", $nombre);
    $stm->bindParam(":apellidos", $apellidos);
    $stm->bindParam(":telefono", $telefono);
    $stm->bindParam(":fecha", $fecha);
    $stm->execute();

    header("Location: index.php");
}

?>

<?php include('../../template/header.php'); ?>

<form action="" method="post" >

    <input type="hidden" class="form-control" name="txtid" value="<?php echo $txtid; ?>">

    <label for="">Nombres</label>
    <input type="text" class="form-control" name="nombre" value="<?php echo $nombre; ?>" placeholder="Ingresar Nombre(s)" required>

    <label for="">Apellidos</label>
    <input type="text" class="form-control" name="apellidos" value="<?php echo $apellidos; ?>" placeholder="Ingresar Apellido(s)" required>

    <label for="">Telefono</label>
    <input type="text" class="form-control" name="telefono" value="<?php echo $telefono; ?>" placeholder="Telefono" minlength="10" maxlength="10" required>

    <label for="">Fecha</label>
    <input type="date" class="form-control" name="fecha" value="<?php echo $fecha; ?>" required>
        
    <div class="modal-footer">
        <a href="index.php" class="btn btn-danger">Cancelar</a>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </div>

</form>
<?php include('../../template/footer.php'); ?>